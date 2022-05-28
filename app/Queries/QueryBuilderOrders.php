<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\Order;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class QueryBuilderNews implements QueryBuilder
{

	public function getBuilder(): Builder
	{
		return Order::query();
	}

	public function getOrders($col): LengthAwarePaginator
	{
		return Order::with('category')->paginate($col);
	}

	
}