<?php
/**
 * Created by PhpStorm.
 * User: demon
 * Date: 08.08.2017
 * Time: 23:02
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <ul class="list-group">

        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
            <li class="list-group-item">
            <?if(array_key_exists("img", $arItem["PARAMS"])
                && file_exists($_SERVER["DOCUMENT_ROOT"].$arItem["PARAMS"]["img"])){?>
                <img src="<?=$arItem["PARAMS"]["img"]?>">
            <?}?>
            <a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
        <?else:?>
            <li class="list-group-item">
            <?if(array_key_exists("img", $arItem["PARAMS"])
                && file_exists($_SERVER["DOCUMENT_ROOT"].$arItem["PARAMS"]["img"])){?>
                <img src="<?=$arItem["PARAMS"]["img"]?>">
            <?}?>
            <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endif?>

        <?endforeach?>

    </ul>
<?endif?>