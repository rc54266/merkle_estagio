<?php
use Tygh\Settings;

$settings = Registry::get('addons.hello_world');

$schema['frontend']['checkbox'] = $settings['checkbox'] === 'Y';

return $schema;