<?php

namespace frontend\modules\da\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DaAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
