<?php
ajnok\displayuser\assets\AppAsset::register($this);
//print_r(Yii::$app->assetManager->getBundle('@vendor\ajnok\assets\AppAsset'));
?>

<div class="user-panel ">
    <div class="pull-left image">
        <img src="<?= $directoryAsset ?>/img/user-unknown.png" class="img-circle" alt="User Image"/>
    </div>
    <div class="pull-left info">
        <p> Aj.Nok</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>