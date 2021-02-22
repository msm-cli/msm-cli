<?php
namespace MSM;
use Illuminate\Support\ServiceProvider;


class MSMServiceProvider extends ServiceProvider
{

     /**
     * Boot any application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->app->configure('msm');

    }
   /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once  __DIR__."./helpers/helper.php";
    }

}

