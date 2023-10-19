<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('issetAndNotEmpty', function ($expression) {
            return "<?php if (isset({$expression}) && !empty({$expression}) && $expression != 'false'): ?>";
        });
        Blade::directive('elseIssetAndNotEmpty', function ($expression) {
            return "<?php else: ?>";
        });

        Blade::directive('endIssetAndNotEmpty', function () {
            return "<?php endif; ?>";
        });
    }
}
