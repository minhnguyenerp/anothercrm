<?php
/**
 * Description of AppAsset
 *
 * @author Minh Nguyen
 */
namespace app\views\layouts\simple;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
	public $sourcePath = '@app/views/layouts/simple/publish';
	
	public $css = [
        'css/site.css',
    ];
	
	public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
