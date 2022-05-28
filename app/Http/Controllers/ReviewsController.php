<?php

namespace App\Http\Controllers;

use App\Models\Review;
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
       
       
        $validated = $request->only(['name','review']);
		$order = new Review($validated);

		if($order->save()) {
			return redirect()->route('home')
				->with('success', 'Отзыв успешно отправлен');
		}

		return back()->with('error', 'Ошибка добавления');
    }
    

}
