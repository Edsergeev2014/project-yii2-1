<?php
namespace app\models;
use yii\base\Model;
class Activity extends Model
{
    public $title;
    public $description;
    public $author;
    public $date;
    public $period;
    public $isBlocked;
    public $isRepeat;
//    public $errors;

    public function rules()
    {
        return [
            [['title','author','date'],'required'],
            ['description','string','max' => 250],
            ['date','string'],
            [['isBlocked','isRepeat'],'boolean']
        ];
    }
    public function attributeLabels()
    {
        return [
            'title'=>'Заголовок события',
            'description'=>'Описание',
            'author'=>'Автор',
            'date'=>'Дата',
            'period'=>'Длительность события (дней)',
            'isBlocked'=>'Блокирующее событие',
            'isRepeat'=>'Повторяющееся событие'
        ];
    }
}