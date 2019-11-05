<?php

namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\activity\CreateAction;

class ActivityController extends BaseController
{
    
    public function actions()
    {
        return [
            'create'=>['class'=>CreateAction::class,'name' => 'Создать новое'],
            'update'=>['class'=>CreateAction::class,'name' => 'Изменить']
        ];
    }
    
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
