<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories";
    
    public function getCategories()
	{
		return DB::table($this->table)
			->select(['id', 'title', 'description', 'created_at'])
			->get();
	}

    public function getCategory(int $id)
	{
       return DB::table($this->table)
		   ->select(['id', 'title', 'description', 'created_at'])
		   ->find($id);
	}
}
