<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";
    
    public function getNewsCategory(int $id)
	{
		return DB::table($this->table)
			->select(['id', 'title', 'description', 'image', 'category_id','author'])
			->where('category_id','=',$id)
            ->get();
	}

    public function getNewsId(int $id)
	{
        return DB::table($this->table)
            ->select(['id', 'title', 'description', 'image', 'category_id','author'])
		    ->find($id);
	}

    public function getNews()
	{
        return DB::table($this->table)
            ->select(['id', 'title', 'description', 'image', 'category_id','author'])
		    ->get();
	}
}
