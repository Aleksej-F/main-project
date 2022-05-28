<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Review;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderNews implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return Review::query();
	}

	public function getReviews($col): LengthAwarePaginator
	{
		return Review::with('category')->paginate($col);
	}

	
}