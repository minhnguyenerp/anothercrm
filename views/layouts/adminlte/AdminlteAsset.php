<?php
/**
 * Description of AdminlteAsset
 *
 * @author Minh
 */
namespace app\views\layouts\adminlte;
use yii\web\AssetBundle;

class AdminlteAsset extends AssetBundle
{
	public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
	
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
		'app\views\layouts\adminlte\FontawesomeAsset',
		'app\views\layouts\adminlte\IoniconAsset',
    ];
	
	public function init()
	{
		$this->js = [
			'js/adminlte'.(YII_DEBUG ? '' : '.min').'.js',
		];
		
		$this->css = [
			'css/AdminLTE'.(YII_DEBUG ? '' : '.min').'.css',
			'css/skins/_all-skins'.(YII_DEBUG ? '' : '.min').'.css',
			'//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic&subset=latin,latin-ext,vietnamese',
		];
		parent::init();
	}
}