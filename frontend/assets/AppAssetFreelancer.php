<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetFreelancer extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		//'template/freelancer/vendor/bootstrap/css/bootstrap.min.css',
		//'template/freelancer/css/freelancer.css',
        'template/freelancer/css/freelancer.min.css',

    ];
    public $js = [
		'template/freelancer/js/freelancer.min.js',	
		'template/freelancer/js/jquery.easing.min.js',
		//'template/freelancer/vendor/jquery/jquery.min.js',
			
    ];
    public $depends = [
		//'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset', 
    ];
	
	public $jsOptions = array(
		'position' => \yii\web\View::POS_READY,// POS_HEAD, //POS_END, 
	);
}
