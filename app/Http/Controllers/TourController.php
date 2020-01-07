<?php

namespace App\Http\Controllers;

use App\TourDates;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour_dates = TourDates::latest()->paginate(10);
        return view('admin.tour.index', compact('tour_dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TourDates::create($request->except('_token'));

        alert()->success('Success', 'New Date added');
        return redirect('admin/tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = TourDates::find($id);
        return view('admin.tour.edit', compact('tour'));
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
        $tour = TourDates::find($id);
        $tour->name = $request->name;
        $tour->venue = $request->venue;
        $tour->ticket_url = $request->ticket_url;
        $tour->date = $request->date;
        $tour->box_no = $request->box_no;
        $tour->update();

        alert()->success('Success', 'Date successfully updated');
        return redirect('admin/tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TourDates::find($id)->delete();

        alert()->info('Deleted', 'Date successfully removed');
        return redirect('admin/tour');
    }
}
