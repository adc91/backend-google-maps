<?php
return [
    'plugin' => [
        'name' =>  'Backend Google Maps',
        'description' => 'It provides functionality for the Backend Forms that allows to save maps of Google Maps in an easy and fast way.',
    ],
    'settings' => [
        'tab' => 'Backend Google Maps',
        'label' => 'Backend Google Maps',
        'description' => 'Configuration and integration of the plugin with Google Maps.',
        'address_map_key' => 'Google Maps API KEY (https://developers.google.com/maps/web/?hl=en-419)',
        'address_map_key_comment' => 'Attention: Verify that the API KEY provided by Google is correct. If you modify this value inappropriately, the map can not be displayed.',
        'address_map' => 'Google Maps',
        'address_map_comment' => 'Preview of the map. If not, please check that your KEY API is correctly configured. If you wish you can display this same map on your website using the component provided by the plugin.'
    ],
    'permissions' => [
        'tab' => 'Backend Google Maps',
        'label' => 'Modify plug-in configurations'
    ],
    'widget' => [
        'name' => 'Backend Google Maps Widget'
    ],
    'component' => [
        'name' => 'Simple Frontend Google Maps',
        'description' => 'Display a simple Google Maps on the website frontend.',
        'width' => 'Width',
        'width_description' => 'It can be use px or %',
        'height' => 'Height',
        'height_description' => 'It can be use px or %',
        'mapType' => 'Map type',
        'zoom' => 'Zoom',
        'showMarker' => 'Show Marker',
        'animateMarker' => 'Animate Marker'
    ]
];
