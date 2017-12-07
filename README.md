Backend Google Maps
=============

### Easily and quickly integrate a Google Maps field into your Backend Forms.

This plugin provides a Form Widget to integrate a Google Maps map to a Backend Form in a simple and fast way. Additionally, there is a component to display the map in the frontend of the website.

Requirements:
* Get the Google Maps KEY API. For more information, visit the following link: https://developers.google.com/maps/documentation/javascript/get-api-key?hl=EN

#### Features
* Integrate a Google Maps map into your Backend Forms.
* Display the map in the frontend of the website.

*If you want to help adding features, any contribution in the official Github repository will be of great help.*

#### Like this plugin?
If you like this plugin, give this plugin a Like or Make donation with PayPal: https://www.paypal.me/adc91

# Documentation

#### Installation
To install this plugin you have to click on __add to project__ or need to type __aldea.backendmaps__ in Backend *System > updates > intall plugin*

#### Configuration
To configure this Plugin goto Backend *System* then find *MISC* in left side bar, then click on *Backend Google Maps* , you will get Configuration options (refer screenshots)

#### Usage

##### On the Backend Forms
Create a field type backendmaps in the fields.yaml file of the model where you want to store the latitude and longitude of a Google Maps location.

###### Example:
```yaml
map:
    label: 'Google Maps'
    oc.commentPosition: ''
    span: left
    type: backendmaps
```

##### On the Frontend
```yaml
[gmap]
width = "500%"
height = "500px"
mapTypeId = "TERRAIN"
zoom = 14
showMarker = 1
animateMarker = 1
==
{% component 'gmap' %}
```