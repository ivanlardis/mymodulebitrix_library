<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('my.applications');
use MY\APPLICATIONS;
###Сохранение значений ###
$arResult['dontavt']=!$USER->IsAuthorized();

if($_REQUEST['save'] && $arParams["mykonstr"]=='ADDzai') {
    $cart = array(


            "UF_OPISANIE" =>   $_REQUEST['UF_OPISANIE'],
            "UF_NAME" =>   $_REQUEST['UF_NAME']


    );

    $json = json_encode($cart);

    //$json1 = json_decode($json);
    //echo $json;
   // echo $json1->DATA->PARAMS->DATE;
    $otvet= json_decode(applications\mymanag::Setmyzyavki($json));
    echo $otvet->result;
    echo "<br>";
    echo $otvet->message;

}


if($_REQUEST['save'] && $arParams["mykonstr"]=='ADDstr') {
    $cart = array(

        "NAME" =>   $_REQUEST['NAME'],
        "PREVIEW_TEXT" =>   $_REQUEST['PREVIEW_TEXT'],
        "DETAIL_TEXT" =>   $_REQUEST['DETAIL_TEXT']


    );

    $json = json_encode($cart);

    //$json1 = json_decode($json);
    //echo $json;
    // echo $json1->DATA->PARAMS->DATE;
    $otvet= json_decode(applications\mymanag::Setmystat($json));
    echo $otvet->result;
    echo "<br>";
    echo $otvet->message;


}

###
$this->IncludeComponentTemplate();

?>

