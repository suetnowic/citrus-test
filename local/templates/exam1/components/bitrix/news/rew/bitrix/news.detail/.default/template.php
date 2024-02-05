<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);
Loc::loadMessages(__FILE__);

?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <? if ($arResult["DETAIL_TEXT"] <> '') { ?>
                <? echo $arResult["DETAIL_TEXT"]; ?>
            <? } else { ?>
                <? echo $arResult["PREVIEW_TEXT"]; ?>
            <? } ?>
        </div>
        <div class="review-autor">
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]) { ?>
                <?= $arResult["NAME"] ?>,
            <? } ?>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]) { ?>
                <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>,
            <? } ?>
            <? if ($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]) { ?>
                <?= $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"] ?>,
            <? } ?>
            <? if ($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]) { ?>
                <?= $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"] ?>.
            <? } ?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) { ?>
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
        <? } else { ?>
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/rew/no_photo.jpg" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
        <? } ?>
    </div>
</div>

<?php if($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]) { ?>
<div class="exam-review-doc">
    <p><?= Loc::getMessage("DOCUMENTS") ?></p>
    <?foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] as $documents) { ?>
        <div class="exam-review-item-doc"><img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a
                href="<?=$documents["SRC"]?>"><?=$documents["ORIGINAL_NAME"]?></a>
    </div>
    <? } ?>
</div>
    <hr>
<?php } ?>
