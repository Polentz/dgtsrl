<?php

return [
    'debug'  => true,
    'jr' => [
        'static_site_generator' => [
            'endpoint'   => 'static', // enables the trigger URL & Panel button
            'output_folder' => './docs',           // where the static files will be generated
            'base_url'   => './',                     // change if site isn't at domain root
            'preserve'   => ['README.md', '.git'],   // files/folders to keep on regeneration
            'skip_media' => false,                   // set true if media is already on a CDN
        ]
    ]
];
