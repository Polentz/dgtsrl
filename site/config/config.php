<?php

return [
    'debug' => true,
    'jr' => [
        'static_site_generator' => [
            'endpoint' => 'static', // enables the trigger URL & Panel button
            'output_folder' => './docs',           // where the static files will be generated
            'base_url' => 'file',                   // relative links + /index.html, work when opened directly from disk or hosted at any path
            'preserve' => ['README.md', '.git'],   // files/folders to keep on regeneration
            'skip_media' => false,                   // set true if media is already on a CDN
        ]
    ]
];
