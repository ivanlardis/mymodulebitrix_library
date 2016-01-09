<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
		<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
	</a>
	<ul class="dropdown-menu dropdown-user">
		<li> <i class="fa fa-user fa-fw"></i> <?=$arResult["USER_NAME"]?>
		<li class="divider"></li>
		<li>
			<form action="<?=$arResult["AUTH_URL"]?>">

				<?foreach ($arResult["GET"] as $key => $value):?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?endforeach?>
				<input type="hidden" name="logout" value="yes" />
				<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
			</form>
					</li>
	</ul>
	<!-- /.dropdown-user -->
</li>


