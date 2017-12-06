<?php
return [
    'plugin' => [
        'name' =>  'Backend Google Maps',
        'description' => 'It provides functionality for the Backend Forms that allows to save maps of Google Maps in an easy and fast way.'
    ],
    'settings' => [
        'tab' => 'Backend Google Maps',
        'label' => 'Backend Google Maps',
        'description' => 'Configuration and integration of the plugin with Google Maps.',
        'address_map_key' => 'Google Maps API KEY (https://developers.google.com/maps/web/?hl=en-419)',
        'address_map_key_comment' => 'Attention: Verify that the API KEY provided by Google is correct. If you modify this value inappropriately, the map can not be displayed.',
        'address_map' => 'Google Maps',
        'address_map_comment' => 'Preview of the map. If not, please check that your KEY API is correctly configured.'
    ],
    'permissions' => [
        'tab' => 'Backend Google Maps',
        'label' => 'Modify plug-in configurations'
    ],
    'widget' => [
        'name' => 'Google Maps'
    ]
];
