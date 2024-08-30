<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        View::composer('*', function ($view) {
            $view->with('books', Book::paginate(10));
            $view->with('authors', Author::withCount("books")->orderBy("books_count", "desc")->paginate(10));
            $view->with('categories', Category::all());
        });

        Paginator::useBootstrapFive();
    }
}
