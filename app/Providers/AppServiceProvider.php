<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Auditeur;
use App\Models\Recrutement;
use App\Observers\RecrutementObserver;
use App\Models\TestAdmi;
use App\Observers\TestAdmiObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Enregistrement des observers
        Recrutement::observe(RecrutementObserver::class);
          TestAdmi::observe(TestAdmiObserver::class);

    }



    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
