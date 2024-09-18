<?php

namespace QuickContact;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use QuickContact\View\Components\contactForm;
use QuickContact\View\Components\Message;
use QuickContact\View\Components\Messages;

class QuickContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       $this->loadRoutesFrom(__DIR__."\\..\\routes\\web.php");
       $this->loadViewsFrom(__DIR__."\\..\\resources\\views","form");
       $this->loadMigrationsFrom(__DIR__."\\..\\database\\migrations");
       Blade::component("quickcontact",contactForm::class);
       Blade::component("messages",Messages::class);
       Blade::component("message",Message::class);
    }
}
