<?php

if (!function_exists('getTimezone')) {
    function getTimezone()
    {
        return request()->cookie('tz');
    }
}
