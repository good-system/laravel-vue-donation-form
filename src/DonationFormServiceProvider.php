<?php
namespace GoodSystem\DonationForm;

use Illuminate\Support\ServiceProvider;

class DonationFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
    /**
     * Register the application services.
     */
    public function register()
    {

    }
}