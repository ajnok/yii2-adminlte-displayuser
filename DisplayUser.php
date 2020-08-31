<?php

namespace ajnok\displayuser;
use Yii;

class DisplayUser extends \yii\base\Widget
{
    private $_isGuest = false;
    private $_username;
    private $_userid;
    const LOGIN_URL = "authen";
    public $location = null;
//    private $_directoryAsset;
    const GUEST_IMG_PATH = "img/user-unknown.svg";
    public function init()
    {
        parent::init();
        $this->registerTranslations();

//        if ($this->isGuest === null || $this->isGuest) {
//            $this->isGuest = 'ผู้ใช้ทั่วไป';
//        }
        if (is_null(Yii::$app->user->identity)){
            $this->_isGuest = true;
            $this->_userid = -1;
            $this->_username = self::t('messages','Guest User');
        }else{
            $this->_isGuest = false;
            $this->_username = Yii::$app->user->identity->username;
            $this->_userid = Yii::$app->user->id;
            // TODO Get an user image from unimplemented User's module
        }
    }
    public function run()
    {
        if($this->location === null) {
            $this->location = 'sidebar';
        }else{
            $this->location = 'header';
        }
        return $this->render($this->location,[
            'image' => $this->getImage(),
            'isGuest' => $this->_isGuest,
            'username'  => $this->_username,
            'uid' => $this->_userid,
            'loginUrl' => self::LOGIN_URL,
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
                'displayuser/messages' => 'messages.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('displayuser/' . $category, $message, $params, $language);
    }

    private function getImage()
    {
        if($this->_isGuest){
            return self::getThemeAssetDirectory() . DIRECTORY_SEPARATOR .  self::GUEST_IMG_PATH;
        }else{
            // TODO implement User image
            // return something
        }
    }
    public static function getThemeAssetDirectory()
    {

        return Yii::$app->assetManager->getPublishedUrl('@vendor/ajnok/yii2-adminlte-displayuser/dist');
    }
}