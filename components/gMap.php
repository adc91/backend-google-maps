<?php namespace Aldea\BackendMaps\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\CodeBase;

use Aldea\BackendMaps\Models\Settings;

class gMap extends ComponentBase
{
    public $longitude;
    public $latitude;
    public $apiKey;

    public function componentDetails()
    {
        return [
            'name' => 'aldea.backendmaps::lang.component.name',
            'description' => 'aldea.backendmaps::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'width' => [
                'title'             => 'aldea.backendmaps::lang.component.width',
                'default'           => '100%',
                'description'       => 'aldea.backendmaps::lang.component.width_description',
                'type'              => 'string',
            ],
            'height' => [
                'title'             => 'aldea.backendmaps::lang.component.height',
                'default'           => '350px',
                'description'       => 'aldea.backendmaps::lang.component.height_description',
                'type'              => 'string',
            ],
            'mapTypeId' => [
                'title'             => 'aldea.backendmaps::lang.component.mapType',
                'default'           => 'ROADMAP',
                'type'              => 'dropdown',
                'options'           => ['ROADMAP'=>'Roadmap', 'SATELLITE'=>'Satellite', 'HYBRID'=>'Hybrid', 'TERRAIN'=>'Terrain']
            ],
            'zoom' => [
                'title'             => 'aldea.backendmaps::lang.component.zoom',
                'default'           => 12,
                'type'              => 'string',
            ],
            'showMarker' => [
                'title'             => 'aldea.backendmaps::lang.component.showMarker',
                'default'           => 'true',
                'type'              => 'checkbox',
            ],
            'animateMarker' => [
                'title'             => 'aldea.backendmaps::lang.component.animateMarker',
                'default'           => 'true',
                'type'              => 'checkbox',
            ]        
        ];
    }

    public function onRun()
    {
        $settings = Settings::instance();

        // Latitude and longitude
        $address_map = explode(',', $settings->address_map);

        $this->latitude = !empty($address_map[0]) ? $address_map[0] : 0;
        $this->longitude = !empty($address_map[1]) ? $address_map[1] : 0;

        // Google Maps API KEY
        $this->apiKey = $settings->address_map_key;
    }
}