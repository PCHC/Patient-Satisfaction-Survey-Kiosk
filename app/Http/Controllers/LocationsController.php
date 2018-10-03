<?php

namespace App\Http\Controllers;

use App\Location;
use App\Question;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    public function all()
    {
        $locations = Location::withTrashed()->get();
        $isAll = true;
        return view('locations.index', compact('locations', 'isAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Location $location)
    {
        return view('locations.create', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form submission
        $this->validate($request, [
            'location' => 'required'
        ]);

        $location = $request->location;

        // Create a new question using the request data
        // Save it to the database
        Location::create(compact('location'));

        // Then redirect
        return redirect('/locations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $questions = Question::withTrashed()->get();
        return view('locations.edit', compact('location', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
       $this->validate($request, [
            'location' => 'required'
        ]);

        $location->update([
            'location' => $request->location
        ]);

        $location->save();

        return redirect('/locations/' . $location->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        if ($location->id == 1) {
            return redirect('/locations')->flash('status', 'Cannot disable the default location'); 
        }

        $location->delete();

        return redirect('/locations');
    }

    public function restore($id)
    {
        $location = Location::withTrashed()->find($id)->restore();

        return redirect('/locations');
    }
}
