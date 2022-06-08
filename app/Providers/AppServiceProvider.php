<?php

namespace App\Providers;

use App\Queries\QueryBuilder;
use App\Queries\QueryBuilderCategories;
use App\Queries\QueryBuilderNews;
use App\Queries\QueryBuilderOrders;
use App\Queries\QueryBuilderRevierws;
use App\Services\ParserService;
use App\Services\SocialService;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Services\Contract\Parser;
use App\Services\Contract\Social;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //query builders
        $this->app->bind(QueryBuilder::class, QueryBuilderNews::class);
        $this->app->bind(QueryBuilder::class, QueryBuilderCategories::class);
        $this->app->bind(QueryBuilder::class, QueryBuilderOrders::class);
        $this->app->bind(QueryBuilder::class, QueryBuilderRevierws::class);

        //servises
        $this->app->bind(Parser::class, ParserService::class);
        $this->app->bind(Social::class, SocialService::class);

        //$this->app->bind(UploadService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
    }
}
