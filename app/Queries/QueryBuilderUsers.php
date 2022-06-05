<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderUsers implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return User::query();
	}

	public function getUsers($col): LengthAwarePaginator
	{
		//dd(User::select(['id', 'name', 'email', 'created_at','is_admin']));
		return User::select(['id', 'name', 'email', 'created_at','is_admin'])
		->paginate($col);
	}

	// public function getNewsByIdCategory(int $id) : LengthAwarePaginator
	// {
	// 	return News::select(['id', 'title', 'description', 'image', 'category_id','author'])
	// 	->where('category_id','=',$id)
	// 	->paginate(9);;
	// }
}