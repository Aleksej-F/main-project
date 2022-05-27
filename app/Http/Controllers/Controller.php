<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews($id = null, $id_category = null)
    {
        $model = app(News::class);
       
        
        if ($id) {
            $news = $model->getNewsId($id);
            return $news ;
            
        }

        if ($id_category) {
            $news = $model->getNewsCategory($id_category);
            return $news ;
            
        }

        $news = $model->getNews();
        // dd(
        //     $news
        //     );
        return $news;
    }

    public function getCategories($id = null)
    {
        // $categories = [];
       
        $model = app(Category::class);
        if ($id) {
            $categories = $model->getCategory($id);
            return $categories;
        }

        $categories = $model->getCategories();
        // dd(
		// 	$categories
		// );
        return $categories;
    }


    // public function getNews($id = null, $id_category = null): array
    // {
    //     $news = [];
    //     $faker = Factory::create();
        
    //     if ($id) {
    //         return [
    //             'id' => $id,
    //             'id_category' =>$id_category,
    //             'title' => $faker->jobTitle(),
    //             'author' => $faker->name(),
    //             'image' => $faker->imageUrl(),
    //             'description' => $faker->text(150),
    //             'created_at' => now('Europe/Moscow')
    //         ];
            
    //     }

    //     for($i=0; $i<10; $i++) {
    //         $news[] = [
    //             'id' => $i+1,
    //             'id_category' =>$id_category,
    //             'title' => $faker->jobTitle(),
    //             'author' => $faker->name(),
    //             'image' => $faker->imageUrl(),
    //             'description' => $faker->text(150),
    //             'created_at' => now('Europe/Moscow')
    //         ];
    //     }

    //     return $news;
    // }


    // public function getCategories($id = null): array
    // {
    //     $categories = [];
    //     $faker = Factory::create();
    //     
    //     if ($id) {
    //         return [
    //             'id' => $id,
    //             'title' => $faker->jobTitle(),
    //             'created_at' => now('Europe/Moscow')
    //         ];
            
    //     }

    //     for($i=0; $i<10; $i++) {
    //         $categories[] = [
    //             'id' => $i+1,
    //             'title' => $faker->jobTitle(),
    //             'created_at' => now('Europe/Moscow')
    //         ];
    //     }

    //     return $categories;
    // }
}
