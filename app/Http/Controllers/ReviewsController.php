<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Replies;
use App\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Reviews::latest()->get();
        return view ('reviews', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $spam = [
           'casino', 'free stuff', 'free cash', 'cash'
        ];

        $review = new Reviews;
        $review->name = $request->name;
        if(str_contains($request->comments, $spam)) {
            throw new \Exception('Your comment contains words we consider spam', 402);
        }
        else {
            $review->comments = $request->comments;
            $review->save();
        }

        alert()->success('Success', 'Your review as been added');
        return back();
    }

    public function addReply(Request $request, $id)
    {
        $spam = [
            'casino', 'free stuff', 'free cash', 'cash'
        ];

        $reply = new Replies;
        $reply->comment_id = $id;
        $reply->name = $request->name;
        if(str_contains($request->comments, $spam)) {
            abort(401, 'Your reply contains words we consider spam');

        }
        else {
            $reply->reply = $request->comments;
            $reply->save();

            alert()->success('Success', 'Your reply as been added');
            return back();
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
