<?php

namespace trntv\yii\datetime;

use yii\web\AssetBundle;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment';

    public $js = [
        'min/moment-with-locales.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
