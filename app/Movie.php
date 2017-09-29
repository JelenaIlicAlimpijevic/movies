<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title', 'storyline', 'genre', 'director','created_at'];
    const STORE_RULES = [
        'title' => 'required | max: 25',
        'storyline' => 'required | max: 1000',
        'genre' => 'required',
        'created_at'=>'required|date|after:1900|before:2017'
    ];
}
