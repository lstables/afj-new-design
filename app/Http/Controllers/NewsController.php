<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = News::latest()->paginate(10);
        return view('admin.news.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $imageName = str_random(25).'.'.$file->getClientOriginalExtension();
            $t = Storage::disk('s3')->put($imageName, file_get_contents($file), 'public');
            $imageName = Storage::disk('s3')->url($imageName);

            $news = new News;
            $news->title = $request->title;
            $news->url = $request->url;
            $news->video_url = $request->video_url;
            $news->post_body = $request->post_body;
            $news->img = $imageName;
            $news->published_date = $request->published_date;
            $news->slug = str_slug($request->title, '-');
            $news->save();
        } else {
            $news = new News;
            $news->title = $request->title;
            $news->url = $request->url;
            $news->video_url = $request->video_url;
            $news->post_body = $request->post_body;
            $news->img = null;
            $news->published_date = $request->published_date;
            $news->slug = str_slug($request->title, '-');
            $news->save();
        }

        alert()->success('Success', 'News Post added');
        return redirect('admin/news');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $imageName = str_random(25).'.'.$file->getClientOriginalExtension();
            $t = Storage::disk('s3')->put($imageName, file_get_contents($file), 'public');
            $imageName = Storage::disk('s3')->url($imageName);

            $news = News::find($id);
            $news->title = $request->title;
            $news->url = $request->url;
            $news->video_url = $request->video_url;
            $news->post_body = $request->post_body;
            $news->img = $imageName;
            $news->published_date = $request->published_date;
            $news->update();
        } else {
            $news = News::find($id);
            $news->title = $request->title;
            $news->url = $request->url;
            $news->video_url = $request->video_url;
            $news->post_body = $request->post_body;
            $news->img = null;
            $news->published_date = $request->published_date;
            $news->update();
        }

        alert()->success('Success', 'Post successfully updated');
        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();

        alert()->info('Deleted', 'Post successfully removed');
        return redirect('admin/news');
    }

    /**
     * @return mixed
     */
    public function upload(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $site = Config::get('app.url');

        $file->move(public_path().'/uploads/', $fileName);
        return Response::json(['filelink' => $site . '/uploads/' . $fileName]);
    }
}
