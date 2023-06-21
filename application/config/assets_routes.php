<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$obj =& get_instance();

$base_url = $obj->config->item('base_url');

$config['go'] = $base_url.'equation/';

$config['css1'] = $base_url.'briondio/assets/css/';
$config['js1'] = $base_url.'briondio/assets/js/';
$config['img1'] = $base_url.'briondio/assets/img/';
$config['svg1'] = $base_url.'briondio/assets/svg/';
$config['images1'] = $base_url.'briondio/assets/images/';
$config['vendor-css1'] = $base_url.'briondio/assets/vendor/css/';
$config['vendor-js1'] = $base_url.'briondio/assets/vendor/js/';
$config['vendor-fonts1'] = $base_url.'briondio/assets/webfonts/';
$config['vendor-libs1'] = $base_url.'briondio/assets/vendor/libs/';
$config['css-2'] = $base_url.'equation/assets/css/';
$config['js-2'] = $base_url.'equation/assets/js/';
$config['fonts'] = $base_url.'equation/assets/fonts/';
$config['images-2'] = $base_url.'equation/assets/images/';
$config['libs'] = $base_url.'equation/assets/libs/';
$config['css'] = $base_url.'assets/css/';
$config['js'] = $base_url.'assets/js/';
$config['img'] = $base_url.'assets/img/';
$config['svg'] = $base_url.'assets/svg/';
$config['vendor-css'] = $base_url.'assets/vendor/css/';
$config['vendor-js'] = $base_url.'assets/vendor/js/';
$config['vendor-fonts'] = $base_url.'assets/vendor/fonts/';
$config['vendor-libs'] = $base_url.'assets/vendor/libs/';
 
