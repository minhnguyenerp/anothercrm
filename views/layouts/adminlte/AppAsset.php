<?php
/**
 * Description of AppAsset
 *
 * @author Minh Nguyen
 */
namespace app\views\layouts\adminlte;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
	public $sourcePath = '@app/views/layouts/adminlte/publish';
	
	public $css = [
        'css/site.css',
    ];
	
	public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'app\views\layouts\adminlte\AdminlteAsset',
    ];
}
