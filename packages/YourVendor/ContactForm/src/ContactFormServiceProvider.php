<?php

namespace YourVendor\ContactForm;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');

        // Publish views
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/contactform'),
        ]);

        // Publish migrations
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'migrations');
    }

    public function register()
    {
        //
    }
}
