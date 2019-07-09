<?php
/**
 * Created by PhpStorm.
 * User: yhb
 * Date: 19-7-9
 * Time: 下午2:43
 */

namespace Yhb\Apitools;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(ApiTools::class, function(){
            return new ApiTools(config('services.weather.key'));
        });

        $this->app->alias(ApiTools::class, 'apitools');
    }

    public function provides()
    {
        return [ApiTools::class, 'apitools'];
    }
}