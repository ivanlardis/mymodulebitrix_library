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

<div id="tooplate_slider">

	<!-- Start Advanced Gallery Html Containers -->
	<div id="gallery" class="content">
		<div class="slideshow-container">
			<div id="loading" class="loader"></div>
			<div id="slideshow" class="slideshow"></div>
		</div>
	</div>
	<div id="thumbs" class="navigation">
		<ul class="thumbs noscript">


				<!-- the actual roundabout -->

<?foreach($arResult["ROWS"] as $arItems):?>
	<?foreach($arItems as $arItem):?>
		<?if(is_array($arItem)):?>


			<?if($arResult["USER_HAVE_ACCESS"]):?>
				<?if(is_array($arItem["PICTURE"])):?>



					<li>
						<a class="thumb" name="leaf" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" title="<?=$arItem["PICTURE"]["ALT"]?>">
							<img src="<?=$arItem["PICTURE"]["SRC"]?>" alt="<?=$arItem["PICTURE"]["ALT"]?>" />
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


		</ul>
	</div>
</div>
