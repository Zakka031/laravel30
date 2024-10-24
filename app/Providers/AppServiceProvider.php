<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
>>>>>>> 90dab3a (laptop kapot gegaan probeer nu alles over te zetten klein beetje over gekopieerd om mezelf omhoog te helpen snap het wel)
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
<<<<<<< HEAD
        //
=======
        Model::preventLazyLoading();

//        Paginator::useBootstrapFive();
>>>>>>> 90dab3a (laptop kapot gegaan probeer nu alles over te zetten klein beetje over gekopieerd om mezelf omhoog te helpen snap het wel)
    }
}
