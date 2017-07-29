<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/bootstrap/dist/css/bootstrap.min.css',
        'vendors/font-awesome/css/font-awesome.min.css',
        'vendors/nprogress/nprogress.css',
        'vendors/google-code-prettify/bin/prettify.min.css',
        'build/css/custom.min.css',
    ];
    public $js = [
        'vendors/jquery/dist/jquery.min.js',
        'vendors/bootstrap/dist/js/bootstrap.min.js',
        'vendors/fastclick/lib/fastclick.js',
        'vendors/nprogress/nprogress.js',
        'vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js',
        'vendors/jquery.hotkeys/jquery.hotkeys.js',
        'vendors/google-code-prettify/src/prettify.js',
        'build/js/custom.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
