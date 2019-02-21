<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 2/21/19
 * Time: 2:30 PM
 */
namespace Salman\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contactform');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contactform.php','contactform');
        $this->publishes([
            __DIR__.'/config/contactform.php' => config_path('contactform.php'),
            __DIR__.'/views/' => resource_path('views/vendor/contactform'),
            __DIR__.'/database/migrations' => database_path('migrations')
        ]);
    }

    public function register()
    {

    }
}
