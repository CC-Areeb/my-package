<?php

namespace Areeb\Mypackage;

use Illuminate\Support\ServiceProvider;

class EmailBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // if ($this->app->runningInConsole()) {
        //     $this->RegisterPublishing();
        // }
    }

    public function register()
    {
        $this->commands([
            Console\ProcessCommand::class,
        ]);
    }

    // protected function RegisterPublishing()
    // {
    //     dd('test');
    // }
}