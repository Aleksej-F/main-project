<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\News;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderNews implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return News::query();
	}

	public function getNews($col): LengthAwarePaginator
	{
		return News::with('category')->paginate($col);
	}

	public function getNewsByIdCategory(int $id) : LengthAwarePaginator
	{
		return News::select(['id', 'title', 'description', 'image', 'category_id','author'])
		->where('category_id','=',$id)
		->paginate(9);;
	}
}