<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
       
       
        return view('review.create');
    }
    
    public function store(Request $request)
    {
       
       
        $request->validate([
			'name' => ['required', 'string']
		]);


        return response()->json($request->only(['name', 'description']), 201);
    }
    

}
