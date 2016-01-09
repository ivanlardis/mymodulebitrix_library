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
if($_REQUEST[savesv]=='привезать')
{APPLICATIONS\mymanag::setmystrzai($_REQUEST[UF_IDZAI],$_REQUEST[UF_IDSTR]);}
if($_REQUEST['stotkr'])
{$arResult['myres']=APPLICATIONS\mymanag::getidst($_REQUEST['myst1']);}
else
{
     $arResult['myres'] = (applications\mymanag::Viewmyzyavki($arParams["mykonstr"]));
 $arResult['myresq'] = (applications\mymanag::Viewmyzyavki('IDzyi'));
}

$this->IncludeComponentTemplate();

?>

