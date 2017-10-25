<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/bootstrap/dist/css/bootstrap.min.css',
        'vendors/font-awesome/css/font-awesome.min.css',
        'vendors/nprogress/nprogress.css',
        'vendors/animate.css/animate.min.css',
        'build/css/custom.min.css',
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
