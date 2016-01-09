<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



			<?if (!empty($arResult)):?>
<?foreach($arResult as $key => $arItem):?>
				<?if($arItem['DEPTH_LEVEL'] != 1){
				continue;
					}
					?>
					<?if($arItem['DEPTH_LEVEL'] == 1):?>

<li <?if ($arItem["SElECTED"]):?> class="active"<?endif;?>>
	<a href="<?=$arItem["LINK"];?>"><i class="fa <?=$arItem['PARAMS']["iconclass"];?> fa-fw"></i> <?=$arItem["TEXT"];?>


		<?endif;?>
<? $my=false;?>
						<?foreach($arResult as $keyInner => $arItemInner):?>
						<?if($keyInner <= $key) {
							continue;
						}
						?>
					<?if ($my==false &&$arItemInner['DEPTH_LEVEL'] == 2):?><span class="fa arrow"></span></a><ul class="nav nav-second-level"><? $my=true; endif;?>
							<?if($arItemInner['DEPTH_LEVEL'] == 2):?>

					<li>
						<a class="active" href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a>
					</li>

						<?endif;?>
						<?if($arItemInner['DEPTH_LEVEL'] != 2){
							break;
						}
						?>
					<?endforeach;?>
					<?if ($my==false &&$arItem['DEPTH_LEVEL'] == 1):?></a><? endif;?>

					<?if($arItem['DEPTH_LEVEL'] == 1&& $my==true):?></ul><?endif;?>
					<?if($arItem['DEPTH_LEVEL'] == 1):?>

	<!-- /.nav-second-level -->
</li>

					<?endif;?>
				<?endforeach;?>
			<?endif?>



