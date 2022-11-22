<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{

    /**
     * Sets blade directives services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('dateTime', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('d-m-Y H:i'); ?>";
        });
        Blade::directive('day', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('l'); ?>";
        });
        Blade::directive('month', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('F'); ?>";
        });
        Blade::directive('year', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('Y'); ?>";
        });
        Blade::directive('shortDate', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('d/m/y'); ?>";
        });
        Blade::directive('fullDate', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('l, j F Y'); ?>";
        });
        Blade::directive('shortTime', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('H.i'); ?>";
        });
        Blade::directive('fullTime', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->translatedFormat('H.i.s'); ?>";
        });
        Blade::directive('dateDiff', function ($expression) {
            return "<?php echo ($expression)->timezone(getTimezone())->diffForHumans(); ?>";
        });
    }
}
