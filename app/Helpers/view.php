<?php
use Illuminate\Support\Facades\Cookie;
use Stevebauman\Location\Facades\Location;

if (!function_exists('getTimezone')) {
    /**
     * Retrieve client timezone
     * 
     * @return string
     */
    function getTimezone()
    {
        return request()->cookie('tz');
    }
}

if (!function_exists('getCountryCode')) {
    /**
     * Retrieve country code based on IP address
     * 
     * @return string
     */
    function getCountryCode()
    {
        if (!request()->cookie('country')) {
            Cookie::queue('country', Location::get()->countryCode ?? 'ID', 60 * 24 * 365);
        }
        return request()->cookie('country');
    }
}