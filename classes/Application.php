<?php
namespace app\classes;

class Application extends \yii\web\Application
{
	public function init()
    {
        parent::init();
		$this->layout = 'adminlte/main';
    }
}