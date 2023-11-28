<?php

namespace frontend\modules\pd\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PdAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/style1.css',

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];


}

