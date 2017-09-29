<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index(){
    	$movies=Movie::all();
    	return view('movies.index',compact('movies'));
    }
    
    public function show($id) {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

     public function store(Request $request) {
        // $request->validate(Movie::STORE_RULES);

        // dd($request->all());
        $movie = Movie::create($request->all());
        return redirect()->route('all-movies');
    }

    public function create() {
        return view('movies.create');
    }
}
