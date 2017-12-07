<?php namespace Aldea\BackendMaps;

use System\Classes\PluginBase;
use System\Classes\PluginManager;
use System\Classes\SettingsManager;

/**
 * Backend Google Maps Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'aldea.backendmaps::lang.plugin.name',
            'description' => 'aldea.backendmaps::lang.plugin.description',
            'author'      => 'Aldea',
            'icon'        => 'icon-search'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'aldea.backendmaps::lang.settings.label',
                'description' => 'aldea.backendmaps::lang.settings.description',
                'permissions' => ['aldea.backendmaps.manage'],
                'icon'        => 'icon-map-marker',
                'class'       => 'Aldea\backendmaps\Models\Settings',
                'order'       => 602
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'aldea.backendmaps.manage' => [
                'label' => 'aldea.backendmaps::lang.permissions.label',
                'tab' => 'aldea.backendmaps::lang.permissions.tab'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Aldea\BackendMaps\Components\gMap' => 'gmap'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Aldea\BackendMaps\FormWidgets\BackendMaps' => [
                'label' => 'aldea.backendmaps::lang.widget.name',
                'code'  => 'backendmaps'
            ]
        ];
    }
}
