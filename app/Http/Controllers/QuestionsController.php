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

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }
    
    public function create()
    {
        return view('questions.create');
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
}
