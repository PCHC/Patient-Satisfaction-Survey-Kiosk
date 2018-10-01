<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index() 
    {
        $questions = Question::latest()->get();
        return view('questions.index', compact('questions'));
    }

    public function all()
    {
        $questions = Question::withTrashed()->latest()->get();
        return view('questions.index', compact('questions'));
    }

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
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
        return redirect('/survey');
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
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
