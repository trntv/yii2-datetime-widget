<?php
namespace trntv\yii\datetime;

use yii\web\AssetBundle;

class DateTimeAsset extends AssetBundle
{
    public $sourcePath = '@bower/eonasdan-bootstrap-datetimepicker';

    public $css = [
        'build/css/bootstrap-datetimepicker.min.css'
    ];

    public $js = [
        'build/js/bootstrap-datetimepicker.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'trntv\yii\datetimepicker\MomentAsset'
    ];

}