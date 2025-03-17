<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

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
        // Blade::component('user-component.booking-stat', 'user-component.booking-stat');
    }

    protected function registerCustomComponents($folder)
    {
        // Dapatkan semua file Blade di folder kustom
        $path = resource_path("views/{$folder}");
        if (File::exists($path)) {
            foreach (File::allFiles($path) as $file) {
                $viewName = str_replace('.blade.php', '', $file->getFilename());
                $fullPath = "{$folder}." . str_replace('/', '.', $file->getRelativePathname());
                Blade::component($fullPath, $viewName);
            }
        }
    }
}
