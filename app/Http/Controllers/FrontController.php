<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\ContactForm;
use App\Http\Requests\MailingListRequest;
use App\News;
use App\TourDates;
use App\Videos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class FrontController extends Controller
{
    public function index()
    {
        $dates = TourDates::where('date', '>=', Carbon::yesterday())
            ->orderBy('date', 'asc')
            // ->groupBy(DB::raw('MONTH(date)'))
            ->get();

        return view('welcome', compact('dates'));
    }

    public function tour()
    {
        $dates = TourDates::where('date', '>=', Carbon::yesterday())
                        ->orderBy('date', 'asc')
                        //->groupBy(DB::raw('MONTH(date)'))
                        ->get();

        return view('tour', compact('dates'));
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        $posts = News::latest()->orderBy('published_date')->paginate(10);
        return view('news', compact('posts'));
    }

    public function article($slug)
    {
        $post = News::whereSlug($slug)->first();
        return view('news-article', compact('post'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('year', 'DESC')->groupBy(['location', 'year'])->paginate(15);
        return view('gallery', compact('galleries'));
    }

    public function galleryLocation($location)
    {
        $galleries = Gallery::where('location', $location)->paginate(20);
        $name = Gallery::where('location', $location)->first();
        return view('gallery_locations', compact('galleries', 'name'));
    }

    public function videos()
    {
        $videos = Videos::orderBy('created_at', 'DESC')->paginate(21);
        return view('videos', compact('videos'));
    }

    public function sendContact(ContactForm $request)
    {
        $data = [
            'name'         => $request->name,
            'email'        => $request->email,
            'subject'      => $request->subject,
            'comments'     => $request->comments
        ];
        // Send the email
        Mail::send('emails/contact', $data, function ($message) use ($data) {
            $message->to(env('ADMIN_EMAIL'))
                ->from($data['email'])
                ->subject('AFJ Contact Form Submission');
        });

        alert()->success('Success', 'Cheers for contacting AFJ, we will contact you back in due course.');
        return back();
    }

    public function joinMailingList(MailingListRequest $request)
    {
        $list = new MailingList;
        $list->name = $request->first_name;
        $list->email = $request->email;
        $list->location = $request->location;
        $list->save();

        $data = [
            'name'         => $request->first_name,
            'email'        => $request->email,
            'location'     => $request->location
        ];
        // Send the email
        Mail::send('emails/mailing', $data, function ($message) use ($data) {
            $message->to(env('ADMIN_EMAIL'))
                ->from($data['email'])
                ->subject('AFJ Mailing List Addition');
        });

        Newsletter::subscribe($request->email, ['FNAME' => $request->first_name, 'LOCATION' => $request->location]);

        alert()->success('Success', 'Thanks for joining the AFJ mailing list.');
        return back();
    }
}
