<?php


namespace ajnok\displayuser;
use Yii;

class DisplayUser extends \yii\base\Widget
{
    public $user;
    public function init()
    {
        parent::init();
        if ($this->user === null) {
            $this->user = 'ผู้ใช้ทั่วไป';
        }
    }
    public function run()
    {
//        return Html::encode($this->message);
        return $this->render('user',[
            'directoryAsset' => Yii::$app->assetManager->getPublishedUrl('@vendor/ajnok/yii2-adminlte-displayuser/dist'),
        ]);
    }
}