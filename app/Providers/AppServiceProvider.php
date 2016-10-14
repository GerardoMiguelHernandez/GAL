<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Categoria;
use App\CentroModel;
use App\Evento;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $categories = Categoria::all();
        $centers= CentroModel::all();
        $alleventos = Evento::orderBy('created_at','DESC')->get();

            View::share('categories', $categories);
                View::share('centers', $centers);
                View::share('alleventos', $alleventos);
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
