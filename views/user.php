<?php
use ajnok\displayuser\DisplayUser;
ajnok\displayuser\assets\DisplayUserAsset::register($this);
//print_r(Yii::$app->assetManager->getBundle('@vendor\ajnok\assets\AppAsset'));
?>

<div class="user-panel ">
    <div class="pull-left image">
        <img src="<?= $directoryAsset ?>/img/user-unknown.png" class="img-circle" alt="User Image"/>
    </div>
    <div class="pull-left info">
        <p> <?= $username ?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> <?= DisplayUser::t('messages', 'Online') ?></a>
    </div>
</div>