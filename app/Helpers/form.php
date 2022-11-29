<?php
use Illuminate\Support\Facades\App;

if (!function_exists('isEmail')) {
    /**
     * Check whether the input is email or else
     * 
     * @param string $input
     * @return bool
     */
    function isEmail($input)
    {
        return str_contains($input, '@');
    }
}

if (!function_exists('isPhoneNumber')) {
    /**
     * Check whether the input is phone number or else
     * 
     * @param string|int $input
     * @return bool
     */
    function isPhoneNumber($input)
    {
        return $input[0] ?? null === '+';
    }
}

if (!function_exists('getPhoneRule')) {
    /**
     * Change phone validation rule between environments
     * 
     * @return string
     */
    function getPhoneRule()
    {
        if (App::environment('production')) {
            return 'auto,mobile';
        }
        return 'lenient';
    }
}
?>