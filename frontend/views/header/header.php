<?php
use yii\helpers\Url;
?>
<div id="vingroup_logos_container" style="opacity: 0;">
    <div id="vingroup_logos">
        <div id="vingroup_logo">
            <a class="item" href="<?=

            Yii::$app->getHomeUrl() ?>">
                <?php

                if (isset($header)) {
                    /** @var $header \common\models\InfoPublic */
                    ?>
                    <img style="width: 100px"
                        src="<?= $header->image_header ? \common\models\InfoPublic::getImage($header->image_header) : '' ?>"
                        alt="">
                <?php } else { ?>
                    <img src="images/icons/vingroup.png" alt="">
                <?php } ?>
            </a>
        </div>
        <div id="PnL_logos_1_container" class="slide-container">
            <div id="PnL_logos_1" class="slide">
                <?php if (isset($listUnitLink) && !empty($listUnitLink)) {
                    foreach ($listUnitLink as $item) {
                        /** @var $item \common\models\AffiliateCompany */
                        ?>
                        <a class="item" href="<?= $item->url ?>" target="_blank" data-id="vinhomes">
                            <img src="<?= $item->getImage() ?>" alt="">
                        </a>
                    <?php }
                } else { ?>
                    <a class="item" href="" target="_blank" data-id="vinhomes">
                        <img src="images/icons/vinhomes.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinpearl">
                        <img src="images/icons/vinpearl.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinpearlland">
                        <img src="images/icons/vinpearlland.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinmec">
                        <img src="images/icons/vinmec.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinschool">
                        <img src="images/icons/vinschool.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vincom">
                        <img src="images/icons/vincom.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vincommerce">
                        <img src="images/icons/vincommerce.png" alt=""/>
                    </a>
                    <a class="item" href="" target="_blank" data-id="adayroi">
                        <img src="images/icons/adayroi.png" alt=""/>
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinmart">
                        <img src="images/icons/vinmart.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinds">
                        <img src="images/icons/vinds.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinpro">
                        <img src="images/icons/vinpro.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vineco">
                        <img src="images/icons/vineco.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="almaz">
                        <img src="images/icons/almaz.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="vinlinks">
                        <img src="images/icons/vinlinks.png" alt="">
                    </a>
                    <a class="item" href="" target="_blank" data-id="quythientam">
                        <img src="images/icons/quythientam.png" alt=""/>
                    </a>
                    <a class="item" href="" target="_blank" data-id="vingroupcard">
                        <img src="images/icons/vingroupcard.png" alt="">
                    </a>
                <?php } ?>


            </div>
        </div>
        <div id="PnL_logos_2_container" class="slide-container">
            <div id="PnL_logos_2" class="slide"></div>
        </div>
        <div class="vingroup_logos_container-clearfix"></div>
    </div>
    <div id="vingroup_line_container">
        <div id="vingroup_line">
            <div id="vingroup_line__left">
                Trang thông tin điện tử Thám Tử VIP
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var widgetVingroupLogosSettings = {
            width: 1200,
            canSticky: true,
            stickyTriggerValue: 0,
            zIndex: 9999999,
            responsive: [
                {
                    breakpoint: 1270,
                    settings: {
                        width: 1240,
                        itemsToShow: 8
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        width: 1170,
                        itemsToShow: 6
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        width: 984,
                        itemsToShow: 6
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        width: 970
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        width: 750,
                        itemsToShow: 4
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        width: 640
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        width: 360,
                        itemsToShow: 2
                    }
                }
            ]
        }

        setInterval(function () {
            jQuery('#PnL_logos_2 .slick-next').click();
        }, 10000);
    </script>
</div>
<div class="header posf">
    <div class="tac posr">
        <div class="menu-rps-992"></div>
    </div>
</div>