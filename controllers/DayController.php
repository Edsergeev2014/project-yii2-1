<?php

namespace app\controllers;

class DayController extends \yii\web\Controller
{
    public function actionCheckDay()
    {
        return $this->render('check-day');
    }

}
