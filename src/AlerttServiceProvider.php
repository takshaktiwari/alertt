<?php

namespace Takshak\Alertt;
use Illuminate\Support\ServiceProvider;
use Takshak\Alertt\Alertt\AlerttService;
use Takshak\Alertt\Facades\Alertt;
use Takshak\Alertt\View\Components\Alert;

class AlerttServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'alertt');

        $this->loadViewComponentsAs('alertt', [
            Alert::class,
        ]);
        # component is laod with '<x-alertt-alert />'

        $this->publishes([
            __DIR__.'/../config/alertt.php' => config_path('alertt.php'),
        ]);
    }   

    public function provides()
    {
       
    }

    public function register()
    {

    }

}