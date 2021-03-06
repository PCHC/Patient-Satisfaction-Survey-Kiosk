<?php

namespace App\Http\Controllers;

use App\Response;
use App\Question;
use App\Location;
use Illuminate\Http\Request;

class ResponsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($location_id = 1)
    {   
        $question = Question::inRandomOrder()->first();
        $location = Location::find($location_id);

        return view('survey.index', compact('question', 'location'));
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
    public function store(Request $request)
    {
        $location_id = $request->location_id;
        $question_id = $request->question_id;
        $response = $request->response;

        Response::create(compact('location_id', 'question_id', 'response'));

        // Then redirect
        return redirect('/survey/thanks/' . $location_id);
    }

    public function thanks($location_id = 1)
    {
        $location = Location::find($location_id);
        return view('survey.thanks', compact('location'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        //
    }
}
