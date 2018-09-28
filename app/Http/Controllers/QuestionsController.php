<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index() 
    {
        $questions = Question::all();
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
        // Create a new question using the request data
        // Save it to the database
        Question::create(request(['question']));

        // Then redirect
        return redirect('/survey');
    }
}
