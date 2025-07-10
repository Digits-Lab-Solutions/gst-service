<?php

namespace Digitslab\GstService;

use Illuminate\Support\ServiceProvider;

class GstServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/gstservice.php' => config_path('gstservice.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/gstservice.php', 'gstservice'
        );
    }
}
