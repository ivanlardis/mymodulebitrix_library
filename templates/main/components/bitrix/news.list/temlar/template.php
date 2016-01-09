<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CsBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="social">

	<ul>



		<?foreach($arResult["ITEMS"] as $arItem):?>


			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="26" height="27" alt="" class="vm"/><?echo $arItem["NAME"]?></a></li>


				<?else:?>
					<li><a href="#"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="26" height="27" alt="" class="vm"/><?echo $arItem["NAME"]?></a></li>

				<?endif;?>
			<?endif?>

		<?endforeach;?>






	 	</ul>
</div>


