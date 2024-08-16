<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;

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

        Paginator::useBootstrap();

        $posts = Post::orderBy('id', 'desc')
            ->paginate(3);

        view()->share('posts', $posts);


        $videos = Video::all();
        view()->share('videos', $videos);

        Gate::before(function ($user, $ability) {
            if ($user->hasRole('Super-Admin')) {
                return true;
            }
        });
    }
}
