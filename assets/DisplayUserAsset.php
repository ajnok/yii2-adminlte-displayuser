<?php

namespace ajnok\displayuser\assets;

use yii\base\Exception;
use yii\web\AssetBundle as BaseDisplayUser;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class DisplayUserAsset extends BaseDisplayUser
{
    public $sourcePath = '@vendor/ajnok/yii2-adminlte-displayuser/dist';
    public $css = [
        'css/ajnok.css',
    ];
//    public $js = [
//        'js/adminlte.min.js'
//    ];
    public $depends = [
//        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
//    public $skin = '_all-skins';

    /**
     * @inheritdoc
     */
//    public function init()
//    {
//        // Append skin color file if specified
//        if ($this->skin) {
//            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
//                throw new Exception('Invalid skin specified');
//            }
//
//            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
//        }
//
//        parent::init();
//    }
}
