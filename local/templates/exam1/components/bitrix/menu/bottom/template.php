<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <div class="item">
        <div class="title-block"><?=GetMessage('ABOUT_SHOP')?></div>
        <ul>
            <?foreach ($arResult as $arItem) { ?>
                <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <? } ?>
        </ul>
    </div>