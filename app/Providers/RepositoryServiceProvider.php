<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Interface and Repository in here
        // You must place Interface in first place
        // If you dont, the Repository will not get readed.
        // You have message is not instantiable while building
        $this->app->bind(
            'App\Interfaces\PersonInterface',
            'App\Repositories\PersonRepository'
        );

        $this->app->bind(
            'App\Interfaces\ContactInterface',
            'App\Repositories\ContactRepository'
        );
    }
}
