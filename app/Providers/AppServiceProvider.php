<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Model\CategoryModel;
// use App\Model\CategoryTypeModel;
// use App\Model\CategoryStyleModel;
// use App\Model\RatingModel;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\View;
// use Config;
// use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);
        // if(!app()->runningInConsole())
        // {
        //     $dataPublic = [
        //         'APP_URL' => config('app.url'),
        //         'APP_NAME' => config('app.name'),
        //         'APP_LOCATE' => \Session::get('website_language', config('app.locale'))
        //     ];
        //     View::share('ShareDataPublic' , $dataPublic);
        //     if(!app()->runningInConsole())
        //     {
        //         View::share('Ratings' , (new RatingModel())->all());
        //         View::share('category_types' , CategoryTypeModel::OrderBy('product_category_id' , 'ASC')->get());
        //         View::share('categories' , CategoryModel::ALl());
        //         View::share('category_styles' , CategoryStyleModel::ALl());
        //     }
        // }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
