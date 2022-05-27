<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return 'yjhdjcnm';
        $categories = $this->getCategories();
        //dd($categories);
        return view('categories.index', [
            'categoriesList' => $categories
        ]);
    }
    
    public function show($id)
    {
        $news = $this->getNews(null, $id);
        //dd($news);
        return view('news.index', [
            'newsList' => $news
        ]);
    }
}
