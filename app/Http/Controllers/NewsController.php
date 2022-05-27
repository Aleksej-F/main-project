<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Queries\QueryBuilderNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(QueryBuilderNews $news)
    {
        // return 'yjhdjcnm';
        
        //dd($news);
        return view('news.index', [
            'news' => $news->getNews(9)
        ]);
    }
    
    public function show(News $news)
    {
        //dd($news);
        return view('news.show', [
            'news' => $news
        ]);
    }

    public function shownews(int $id, QueryBuilderNews $news )
    {
        $newsV = $news->getNewsByIdCategory($id);
        
      // dd($newsV);
        return view('news.index', [
            'news' => $newsV
        ]);
    }

   
}
