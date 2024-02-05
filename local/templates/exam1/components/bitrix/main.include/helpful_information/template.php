<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if (file_get_contents($arResult["FILE"])) { ?>
        <div class="side-block side-anonse">
        <div class="title-block"><span class="i i-title01"></span><?=GetMessage("HELPFUL_INFO")?></div>
        <div class="item">
            <? include($arResult["FILE"]); ?>
        </div>
    </div>
<?php } ?>

