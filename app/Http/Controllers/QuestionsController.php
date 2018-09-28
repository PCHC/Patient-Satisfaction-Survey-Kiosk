<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index() 
    {
        $questions = Question::all();
        return $questions;
        // return view('questions.index', compact($questions));
    }

    public function show(Question $question)
    {
        return $question;
    }
}
