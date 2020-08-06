<?php
use ajnok\displayuser\DisplayUser;
use yii\helpers\Html;

ajnok\displayuser\assets\DisplayUserAsset::register($this);
//print_r(Yii::$app->assetManager->getBundle('@vendor\ajnok\assets\AppAsset'));
?>

<div class="user-panel ">
    <div class="pull-left image">
        <img src="<?= $image ?>" class="img-circle" alt="User Image"/>
    </div>
    <div class="pull-left info">
        <p> <?= $username ?></p>
        <?php
            if($isGuest){
                $icon = HTML::tag('i','',['class'=>'fa fa-key']);
                echo HTML::a($icon . DisplayUser::t('messages','Click to Login'),["site/login"]);
            }else{
                $icon = HTML::tag('i','',['class'=>'fa fa-sign-out']);
                echo HTML::a($icon . DisplayUser::t('messages','Click to Logout'),["site/logout"],['class'=>'logged-in']);
            }
        ?>
<!--        <a href="#"><i class="fa fa-circle text-success"></i> -->
<!--            --><?php //// DisplayUser::t('messages', 'Online') ?><!--</a>-->
    </div>
</div>