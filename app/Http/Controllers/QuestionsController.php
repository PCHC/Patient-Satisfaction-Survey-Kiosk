<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Location;

class QuestionsController extends Controller
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

    public function index() 
    {
        $questions = Question::latest()->get();
        return view('questions.index', compact('questions'));
    }

    public function all()
    {
        $questions = Question::withTrashed()->latest()->get();
        $isAll = true;
        return view('questions.index', compact('questions', 'isAll'));
    }
    
    public function create(Question $question)
    {
        return view('questions.create', compact('question'));
    }

    public function store()
    {
        // Validate the form submission
        $this->validate(request(), [
            'question' => 'required'
        ]);

        // Create a new question using the request data
        // Save it to the database
        Question::create(request(['question']));

        // Then redirect
        return redirect('/questions');
    }

    public function edit(Question $question)
    {
        $locations = Location::withTrashed()->get();
        return view('questions.edit', compact('question', 'locations'));
    }

    public function update(Request $request, Question $question)
    {
       $this->validate($request, [
            'question' => 'required'
        ]);

        $question->update([
            'question' => $request->question
        ]);

        $question->save();

        return redirect('/questions/' . $question->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect('/questions');
    }

    public function restore($id)
    {
        $question = Question::withTrashed()->find($id)->restore();

        return redirect('/questions');
    }
}
