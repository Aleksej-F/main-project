<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
       
       
        return view('order.create');
    }
    
    public function store(Request $request)
    {
       
       
        $request->validate([
			'name' => ['required', 'string']
		]);

        $data = response()->json($request->only(['name','phone','email','order_information']));
        
        $file = 'orders.txt';
        $current = file_get_contents($file);
        $current .= $data;
        file_put_contents($file,$data, FILE_APPEND | LOCK_EX);
        return $data;
    }
}
