<?php

namespace App\Http\Controllers\scores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScoresController extends Controller
{
    //
    //display all scores
    public function index()
    {
        return view('scores.index');
    }

    //create  scores view
    public function create()
    {
        return view('scores.index');
    }

    //Store  scores in database
    public function store()
    {
    }

    //show scores information
    public function show()
    {
        return view('scores.show');
    }
    //Editscores page
    public function edit()
    {
        return view('scores.edit');
    }
    //display all scores
    public function update()
    {
    }

    //Delete scores
    public function destroy()
    {
        return view('scores.index');
    }
    //Search scores
    public function searchTeacher()
    {
        return view('scores.search');
    }
}
