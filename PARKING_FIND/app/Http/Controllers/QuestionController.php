<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $boardData = Question::orderBy('id', 'DESC')->paginate(10);
        
        return view('question')->with('boardData', $boardData);
    }

    public function create(){
       $boardData = Question::
    }
}
