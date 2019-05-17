<?php
namespace Humaon\Contact;
use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Scalar\MagicConst\Dir;

class ContactServiceProvider extends ServiceProvider{
    public function boot(){
        $this->publishes([
            __DIR__ . '/Config/contact.php' => config_path('contact.php'),
            __DIR__.'/resources/views/' => base_path('resources/views/vendor/contact')
        ]);
    }
    public function register(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/Config/contact.php','contact');

    }


}