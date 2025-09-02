<?php

namespace App\Providers;

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
        // Set application locale from session or cookie (if present), or fall back to config
        try {
            $locale = null;
            // prefer session when available
            if (function_exists('session')) {
                $locale = session('locale');
            }

            // if session didn't provide a locale, check cookie
            if (empty($locale)) {
                try {
                    if (function_exists('request') && request()->hasCookie('locale')) {
                        $locale = request()->cookie('locale');
                    }
                } catch (\Exception $inner) {
                    // request()/cookie may not be available in some contexts; ignore
                }
            }

            $locale = $locale ?: config('app.locale');
            if (!empty($locale)) {
                app()->setLocale($locale);
            }
        } catch (\Exception $e) {
            // ignore in non-http contexts
        }
    }
}
