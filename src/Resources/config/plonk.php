<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Route prefixes
    |--------------------------------------------------------------------------
    |
    | Prefix the routes.
    |
    */
    'prefix' => [
        'api' => 'api',
        'web' => '',
    ],

    'crop' => [
        '1' => '1',
        '16' => '9',
        '9' => '16'
    ],

    'crop_tolerance' => 0.1,

    /*
    |--------------------------------------------------------------------------
    | Filtering and uploading query parameters
    |--------------------------------------------------------------------------
    |
    | A list of parameters that can be used for filtering,
    | and validation when storing images to Plonk.
    |
    */

   'query' => [
        'filter' => [
            'search',
            'ratio',
            'orientation',
        ],
        'store' => [
            'ratio',
        ],
   ],

    /*
    |--------------------------------------------------------------------------
    | Mime types
    |--------------------------------------------------------------------------
    |
    | A list of allowed mime types that can be used with plonk.
    |
    */

    'mime' => [
        'image/gif',
        'image/jpeg',
        'image/png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Output
    |--------------------------------------------------------------------------
    |
    | Set the disk and paths that Plonk should use for storing images.
    |
    */

    'output' => [
        'disk' => 's3',
        'paths' => [
            'base' => '/plonk',
            'originals' => '/originals',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Paginate
    |--------------------------------------------------------------------------
    |
    | Set how many images are shown per page.
    |
    */

    'paginate' => [
        'items' => 24,
    ],

    /*
    |--------------------------------------------------------------------------
    | Output sizes
    |--------------------------------------------------------------------------
    |
    | This is the list of image sizes that plonk will output.
    |
    */

    'size' => [
        [
            'name' => 'small',
            'width' => 640,
            'height' => 360,
            'quality' => 80,
        ],[
            'name' => 'medium',
            'width' => 1024,
            'height' => 576,
            'quality' => 70,
        ],[
            'name' => 'large',
            'width' => 1440,
            'height' => 810,
            'quality' => 60,
        ],[
            'name' => 'xlarge',
            'width' => 1920,
            'height' => 1080,
            'quality' => 50,
        ],[
            'name' => 'high',
            'width' => 1280,
            'height' => 720,
            'quality' => 80,
        ]
    ]
];
