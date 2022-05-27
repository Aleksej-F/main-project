<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Queries\QueryBuilderCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(QueryBuilderCategories $categories)
    {
               
        //dd($categories);
        return view('categories.index', [
            'categories' => $categories->getCategories()
        ]);
    }
    
    public function show($id)
    {
       
        //dd($news);
        // return view('news.index', [
        //     'newsList' => $news->getNewsByIdCategory($id)
        // ]);
    }
}
