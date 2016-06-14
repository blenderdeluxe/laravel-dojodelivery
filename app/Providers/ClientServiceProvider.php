<?php

namespace DojoDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DojoDelivery\Repositories\ClientRepository',
            'DojoDelivery\Repositories\ClientRepositoryEloquent'
        );
    }
}
