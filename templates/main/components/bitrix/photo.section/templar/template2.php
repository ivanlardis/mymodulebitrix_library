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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- start header alternate -->
				<!-- roundfabout images targets, prettyphoto opens on click of the middle item -->

				<!-- the actual roundabout -->



	<?foreach($arResult["ROWS"] as $arItems):?>
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>


				<?if($arResult["USER_HAVE_ACCESS"]):?>
					<?if(is_array($arItem["PICTURE"])):?>


						<li>
							<a class="thumb" name="leaf" href="<?=SITE_TEMPLATE_PATH;?>/images/slider/01_l.jpg" title="Title 01">
								<img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/01_t.jpg" alt="Title 01" />
							</a>
						</li>



					<?endif?>
				<?else:?>
					<?if(is_array($arItem["PICTURE"])):?>






					<?endif?>
				<?endif?>

			<?else:?>

			<?endif;?>
		<?endforeach?>







		<?endforeach?>
