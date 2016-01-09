<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?if($arResult['dontavt']):?>

Увы вы не авторизованы
<?elseif ($arParams["mykonstr"]=='ADDzai'):?>


    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">


        <input type = "text" name = "UF_OPISANIE" value = "Opisanie" class="form-control" id="inputSuccess">
        <input type = "text" name = "UF_NAME" value = "ИМЯ" class="form-control" id="inputSuccess">




        <input type="submit" name="save"   class="btn btn-success"
               value="Сохранить">
        <input type="reset" class="btn btn-danger" value="Очистить">


    </form>
    <?elseif ($arParams["mykonstr"]=='ADDstr'):?>



    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">


        <input type = "text" name = "NAME" value = "Название" class="form-control" id="inputSuccess">
        <input type = "text" name = "PREVIEW_TEXT" value = "Анотация" class="form-control" id="inputSuccess">
        <input type = "text" name = "DETAIL_TEXT" value = "Статья" class="form-control" id="inputSuccess">



        <input type="submit" name="save"
               value="Сохранить   " class="btn btn-success">
        <input type="reset" class="btn btn-danger" value="Очистить">


    </form>
<?endif;?>




