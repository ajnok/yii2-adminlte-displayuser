<?php
use ajnok\displayuser\DisplayUser;
use yii\helpers\Html;

ajnok\displayuser\assets\DisplayUserAsset::register($this);
//print_r(Yii::$app->assetManager->getBundle('@vendor\ajnok\assets\AppAsset'));
?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="<?= $image ?>" class="user-image" alt="User Image"/>
    <span class="hidden-xs"><?= $username ?></span>
</a>
<ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <img src="<?= $image ?>" class="img-circle" alt="User Image"/>

        <p>
            <?= $username ?>
            <!-- TODO get last logged in or some user's time-related information -->
<!--            <small>Member since Nov. 2012</small>-->
        </p>
    </li>
    <!-- Menu Body -->
<!--    <li class="user-body">-->
<!--        <div class="col-xs-4 text-center">-->
<!--            <a href="#">Followers</a>-->
<!--        </div>-->
<!--        <div class="col-xs-4 text-center">-->
<!--            <a href="#">Sales</a>-->
<!--        </div>-->
<!--        <div class="col-xs-4 text-center">-->
<!--            <a href="#">Friends</a>-->
<!--        </div>-->
<!--    </li>-->
    <!-- Menu Footer-->
    <li class="user-footer">
    <?php
    if($isGuest){
    ?>
        <div class="text-center">
            <?= Html::a(DisplayUser::t('messages','Click to Login'), ["$loginUrl"],['class'=>'btn btn-default btn-flat']) ?>
        </div>
    <?php
    }else{
    ?>

        <div class="pull-left">
            <a href="#" class="btn btn-default btn-flat"><?= DisplayUser::t('messages','Profile') ?> </a>
        </div>
        <div class="pull-right">
            <?= Html::a(
                DisplayUser::t('messages','Sign Out'),
                ['/site/logout'],
                ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
            ) ?>
        </div>

    <?php
    }
    ?>
    </li>
</ul>

