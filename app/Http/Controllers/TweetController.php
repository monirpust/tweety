<?php

namespace App\Http\Controllers;
use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $validatedAttribute = request()->validate(['body'=> 'required|max:250']);
        Tweet::create([
            'user_id'=> auth()->id(),
            'body'=> $validatedAttribute['body']
        ]);

        return redirect('/tweet');
    }

}
