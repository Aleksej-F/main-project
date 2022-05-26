<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // return 'yjhdjcnm';
        $news = $this->getNews();
        //dd($news);
        return view('news.index', [
            'newsList' => $news
        ]);
    }
    
    public function show($id)
    {
        $news = $this->getNews($id);
        //dd($news);
        return view('news.show', [
            'news' => $news
        ]);
    }
}
