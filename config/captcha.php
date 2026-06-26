<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Disable Captcha
    |--------------------------------------------------------------------------
    */

    'disable' => env('CAPTCHA_DISABLE', false),

    /*
    |--------------------------------------------------------------------------
    | Captcha Characters
    |--------------------------------------------------------------------------
    */

    'characters' => [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K',
        'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V',
        'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k',
        'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w',
        'x', 'y', 'z',
        2, 3, 4, 5, 6, 7, 8, 9,
    ],

    /*
    |--------------------------------------------------------------------------
    | Assets Directory
    |--------------------------------------------------------------------------
    */

    'fontsDirectory' => base_path('vendor/mews/captcha/assets/fonts'),
    'bgsDirectory' => base_path('vendor/mews/captcha/assets/backgrounds'),

    /*
    |--------------------------------------------------------------------------
    | Default Captcha
    |--------------------------------------------------------------------------
    */

    'default' => [
        'length' => 6,
        'width' => 345,
        'height' => 65,
        'quality' => 90,
        'math' => false,
        'expire' => 60,
        'encrypt' => false,

        'bgImage' => false,
        'bgColor' => '#ffffff',

        'fontColors' => ['#111111', '#333333', '#555555'],
        'contrast' => 0,
        'lines' => 5,
        'lineWidth' => 1,
        'lineColor' => '#cccccc',
        'angle' => 10,
        'sharpen' => 0,
        'blur' => 0,
        'invert' => false,
        'sensitive' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Flat Captcha
    |--------------------------------------------------------------------------
    */

    'flat' => [
        'length' => 5,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'math' => false,
        'expire' => 60,
        'encrypt' => false,

        'bgImage' => false,
        'bgColor' => '#ffffff',

        'fontColors' => ['#111111', '#333333', '#555555'],
        'contrast' => 0,
        'lines' => 3,
        'lineWidth' => 1,
        'lineColor' => '#dddddd',
        'angle' => 8,
        'sharpen' => 0,
        'blur' => 0,
        'invert' => false,
        'sensitive' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Mini Captcha
    |--------------------------------------------------------------------------
    */

    'mini' => [
        'length' => 3,
        'width' => 60,
        'height' => 32,
        'quality' => 90,
        'math' => false,
        'expire' => 60,
        'encrypt' => false,

        'bgImage' => false,
        'bgColor' => '#ffffff',

        'fontColors' => ['#111111', '#333333', '#555555'],
        'contrast' => 0,
        'lines' => 2,
        'lineWidth' => 1,
        'lineColor' => '#dddddd',
        'angle' => 8,
        'sharpen' => 0,
        'blur' => 0,
        'invert' => false,
        'sensitive' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Inverse Captcha
    |--------------------------------------------------------------------------
    */

    'inverse' => [
        'length' => 5,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'math' => false,
        'expire' => 60,
        'encrypt' => false,

        'bgImage' => false,
        'bgColor' => '#111111',

        'fontColors' => ['#ffffff', '#eeeeee', '#dddddd'],
        'contrast' => -5,
        'lines' => 3,
        'lineWidth' => 1,
        'lineColor' => '#555555',
        'angle' => 12,
        'sharpen' => 10,
        'blur' => 2,
        'invert' => false,
        'sensitive' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Math Captcha
    |--------------------------------------------------------------------------
    */

    'math' => [
        'length' => 9,
        'width' => 120,
        'height' => 36,
        'quality' => 90,
        'math' => true,
        'expire' => 60,
        'encrypt' => false,

        'bgImage' => false,
        'bgColor' => '#ffffff',

        'fontColors' => ['#111111', '#333333', '#555555'],
        'contrast' => 0,
        'lines' => 3,
        'lineWidth' => 1,
        'lineColor' => '#dddddd',
        'angle' => 8,
        'sharpen' => 0,
        'blur' => 0,
        'invert' => false,
        'sensitive' => false,
    ],

];