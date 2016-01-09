<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>


<?if($arResult['dontavt']):?>

Увы вы не авторизованы
<!--привязка к заявке-->
    <?elseif($_REQUEST["myst"] && $_REQUEST['prz'] ):?>
    <?foreach($arResult['myres'] as $value)
    {if($value['ID']==$_REQUEST["myst"])$myvalue=$value;} ?>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Статью: <?=$myvalue['NAME']?> привезать к заявке:
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>

                                <th>Название заявки</th>
                                <th>Описание заявки</th>
                                <th>Привезать</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?foreach($arResult['myresq'] as $value1):?>

                                <tr class="odd gradeX">

                                    <td><?=$value1['UF_NAME']?></td>
                                    <td><?=$value1['UF_OPISANIE']?></td>

                                    <td>
                                    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
                                        <input type="hidden" name="UF_IDZAI"   value="<?=$value1['ID']?>" />
                                        <input type="hidden" name="UF_IDSTR"   value="<?=$_REQUEST["myst"]?>" />
                                        <input type="submit" class="btn btn-success" name="savesv"
                                               value="привезать">
                                    </form>
                                    </td>

                                </tr>
                            <?endforeach;?>
                            </tbody>
                        </table>


                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


<?elseif($_REQUEST["myst"] && $_REQUEST['otkr'] ):?>
    <?foreach($arResult['myres'] as $value)
    {if($value['ID']==$_REQUEST["myst"])$myvalue=$value;} ?>

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <?=$myvalue['NAME']?>
            </div>
            <div class="panel-body">
                <p> <?=$myvalue['DETAIL_TEXT']?>

                  </div>
            <div class="panel-footer">
                <?=$myvalue['NAME']?>
            </div>
        </div>
    </div>

<?elseif($arParams["mykonstr"]=='IDstatey' || $_REQUEST['stotkr']):?>


    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Таблица статей
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>

                                <th>Название Статьи</th>
                                <th>Описание статьи</th>
                                <th>Сылка на статью</th>
                                <th>Привезать к заявки</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?foreach($arResult['myres'] as $value):?>

                                <tr class="odd gradeX">

                                    <td><?=$value['NAME']?></td>
                                    <td><?=$value['PREVIEW_TEXT']?></td>
                                    <td>
                                        <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
                                       <input type="hidden" name="myst"   value="<?=$value['ID']?>" />
                                            <input type="hidden" name="otkr"   value="trrr" />
                                        <input type="submit" class="btn btn-success" name="save"
                                               value="открыть">
</form>

                                    </td>
                                    <td>
                                        <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
                                            <input type="hidden" name="myst"   value="<?=$value['ID']?>" />
                                            <input type="hidden" name="prz"   value="k;kl;" />
                                            <input type="submit" class="btn btn-success" name="save"
                                                   value="привезать к заявке">
                                        </form>

                                    </td>
                                </tr>
                            <?endforeach;?>
                            </tbody>
                        </table>


                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <!--открытие заявки и заявки пользователя-->
<?elseif ($arParams["mykonstr"]=='IDzyi' || $arParams["mykonstr"]=='IDuserzyi'):?>


    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Таблица заявок
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>

                                <th>Название заявки</th>
                                <th>Описание заявки</th>
                                <th>Список книг подходящих заявке</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?foreach($arResult['myres'] as $value):?>

                                <tr class="odd gradeX">

                                    <td><?=$value['UF_NAME']?></td>
                                    <td><?=$value['UF_OPISANIE']?></td>
                                    <td>
                                        <form action="<?=POST_FORM_ACTION_URI?>" method="POST">

                                            <input type="hidden" name="myst1"   value="<?=$value['ID']?>" />
                                            <input type="hidden" name="filterid"   value="trrr" />
                                            <input type="hidden" name="stotkr"   value="trrr" />
                                            <input type="submit" class="btn btn-success" name="save"
                                                   value="открыть список связаных книг">
                                        </form>
                                    </td>

                                </tr>
                            <?endforeach;?>
                            </tbody>
                        </table>


                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <!--открытие списка статьи-->
<?endif;?>




