<?php
/**
 * Description of AdminlteAsset
 *
 * @author Minh
 */
namespace app\views\layouts\adminlte;
use yii\web\AssetBundle;

class IoniconAsset extends AssetBundle
{
	public $sourcePath = '@vendor/driftyco/ionicons';
	
	public function init()
	{
		$this->css = [
			'css/ionicons'.(YII_DEBUG ? '' : '.min').'.css',
		];
		parent::init();
	}
}