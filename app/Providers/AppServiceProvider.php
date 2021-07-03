<?php

namespace App\Providers;

use App\Demande;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'backoffice.layout'
        ], function ($view) {
           $view->with('demandesCount', $this->getDemandesCount());
        });
    }

    private function getDemandesCount()
    {
        return Demande::where('etat', 'en_cours')->count();
    }
}
