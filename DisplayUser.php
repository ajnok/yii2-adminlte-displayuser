<?php


namespace ajnok\displayuser;
use Yii;

class DisplayUser extends \yii\base\Widget
{
    private $_isGuest = false;
    private $_username;
    private $_userid;
    public function init()
    {
        parent::init();
//        if ($this->isGuest === null || $this->isGuest) {
//            $this->isGuest = 'ผู้ใช้ทั่วไป';
//        }
        if (is_null(Yii::$app->user->identity)){
            $this->_isGuest = true;
            $this->_userid = -1;
            $this->_username =  Yii::t('messages', 'Guest User');
        }else{
            $this->_isGuest = false;
            $this->_username = Yii::$app->user->identity->username;
            $this->_userid = Yii::$app->user->id;
        }
    }
    public function run()
    {
//        return Html::encode($this->message);
        return $this->render('user',[
            'directoryAsset' => Yii::$app->assetManager->getPublishedUrl('@vendor/ajnok/yii2-adminlte-displayuser/dist'),
            'isGuest' => $this->_isGuest,
            'username'  => $this->_username,
            'uid' => $this->_userid,
        ]);
    }
    public function registerTranslations()
    {
        $i18n = Yii::$app->i18n;
        $i18n->translations['displayuser/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@vendor/ajnok/yii2-adminlte-displayuser/messages',
            'fileMap' => [
                'ajnok/yii2-adminlte-displayuser/messages' => 'messages.php',
            ],
        ];
    }
}