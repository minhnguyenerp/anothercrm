<?php
/**
 * Description of AdminlteAsset
 *
 * @author Minh
 */
namespace app\views\layouts\adminlte;
use yii\web\AssetBundle;

class FontawesomeAsset extends AssetBundle
{
	public $sourcePath = '@vendor/fortawesome/font-awesome';
	
	public function init()
	{
		$this->css = [
			'css/font-awesome'.(YII_DEBUG ? '' : '.min').'.css',
		];
		parent::init();
	}
}