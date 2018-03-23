<?php namespace Aldea\BackendMaps\FormWidgets;

use Html;
use Backend\Classes\FormWidgetBase;

use Aldea\BackendMaps\Models\Settings;

/**
 * Backend Google Maps
 * Usage:
 *   address_map:
 *       label: Google Maps
 *       type: backendmaps
 *       fieldPosition:
 *           latitude: latitude
 *           longitude: longitude
 */
class BackendMaps extends FormWidgetBase
{
    private $apiKey;
    private $latitude;
    private $longitude;

    protected $fieldPosition;

    public $defaultAlias = 'backendmaps';

    public function init()
    {
        $this->fieldPosition = $this->getConfig('fieldPosition', []);
    }

    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;

        // If there is no value assigned, we set the default value configured in the YAML file
        if (empty($this->vars['value'])) {
            $this->fieldPosition['latitude'] = !empty($this->fieldPosition['latitude']) ? $this->fieldPosition['latitude'] : $this->latitude;
            $this->fieldPosition['longitude'] = !empty($this->fieldPosition['longitude']) ? $this->fieldPosition['longitude'] : $this->longitude;

            $this->vars['value'] = implode(',', [
                $this->fieldPosition['latitude'], $this->fieldPosition['longitude']
            ]);
        }
    }

    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('backendmaps');
    }

    public function getFieldMapAttributes()
    {
        $result = [];

        return Html::attributes($result);
    }

    public function getFieldPositionAttributes()
    {
        $result = [];

        return Html::attributes($result);
    }

    public function loadAssets()
    {
        $this->_setFromSettings();

        $this->addJs('//maps.googleapis.com/maps/api/js?libraries=places&key=' . $this->apiKey);
        $this->addJs('js/main.js', 'core');
    }

    private function _setFromSettings()
    {
        $settingsInstance = Settings::instance();

        $latLong = explode(',', $settingsInstance->attributes['address_map']);

        $this->apiKey = $settingsInstance->attributes['address_map_key'] ?? '';
        $this->latitude = $latLong[0] ?? '37.386051';
        $this->longitude = $latLong[1] ?? '-122.083855';
    }
}