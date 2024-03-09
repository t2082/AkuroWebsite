<?php

namespace App\Providers;
use Cloudinary\Configuration\Configuration;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $cloudinaryConfig = config('cloudinary');
        \Cloudinary\Configuration\Configuration::instance([
            'cloud' => [
                'cloud_name' => $cloudinaryConfig['cloud_name'],
                'api_key' => $cloudinaryConfig['api_key'],
                'api_secret' => $cloudinaryConfig['api_secret']
            ],
            'url' => [
                'secure' => $cloudinaryConfig['secure']
            ]
        ]);
    }

}
