<?php
/**
 * Description of AppAsset
 *
 * @author Minh Nguyen
 */
namespace app\views\layouts\simple;
use yii\web\AssetBundle;

class Asset extends AssetBundle
{
	public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
