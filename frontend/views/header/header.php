<?php
use common\models\AffiliateCompany;
use common\models\InfoPublic;
use yii\helpers\Url;
?>
<div id="vingroup_logos_container" style="opacity: 0;"></div>
<div class="header posf">
    <div class="tac posr">
        <div class="menu-rps-992"><a href="#"><i class="fa fa-bars"></i></a></div>
        <?php if (isset($cate)){
        /** @var \common\models\Category $item */
        $i = 0;
        foreach ($cate as $item){
        if ($i == 0){
        ?>
        <ul class="header-menu-left header-menu tar">
            <?php } ?>
            <li><a href="<?= $item->ascii_name ?>"><?= $item->display_name ?></a></li>
            <?php
            if ($i == 2){
            ?>
        </ul>
        <a href="<?= Url::to('http://sanchungcu24h.com')?>">
            <?php
            if (isset($header)) {
                /** @var $header InfoPublic */
                ?>
                <img src="<?= $header->image_menu ? \common\models\InfoPublic::getImage($header->image_menu) : '' ?>"
                     alt="">
            <?php } else { ?>
                <img src="images/icons/logo.png" alt="#">
            <?php } ?>
        </a>
        <ul class="header-menu-right header-menu">
            <?php
            }
            $i++;
            }
            }
            ?>
        </ul>
    </div>
</div>