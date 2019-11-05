<?php
namespace app\models;
use yii\base\Model;
class Day extends Model
{
// Проверка на рабочие и выходные дни 
    public function getWeekDay()
    {
        return $this->weekDay;
    }

// Проверка на связанные события
    public function getRelativeEvents()
    {
        return $this->relativeEvents;
    }
}