<?php

namespace app\modules\dashboard;
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\dashboard\controllers';

	/*public function behaviors()
    {
        return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
        ];
    }*/
	
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
