<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem) {
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="review-text">
        <div class="review-block-title">
            <span class="review-block-name">
                <a href="<?= $arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
            </span>
            <span class="review-block-description">
                <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]) { ?>
                    <?= $arItem["DISPLAY_ACTIVE_FROM"]?> г.,
                <? } ?>
                <? if ($arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]) { ?>
                    <?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?>,
                <? } ?>
                <? if ($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]) { ?>
                    <?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?>
                <? } ?>
            </span>
        </div>
        <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]) { ?>
            <div class="review-text-cont"><?= $arItem["PREVIEW_TEXT"];?></div>
        <? } ?>
    </div>
    <div class="review-img-wrap">
        <a href="<?= $arItem["DETAIL_PAGE_URL"]?>">
    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])){ ?>
        <? $arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], ["width" => 68, "height" => 50], BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
        <img src="<?=$arImg["src"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
    <? } else { ?>
        <img src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg" alt="img">
    <? } ?>
        </a>
    </div>
</div>
<?php } ?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
