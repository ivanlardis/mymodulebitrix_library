<?php
namespace MY\APPLICATIONS;
use Bitrix\Im\User;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
use MY\UNI\MybookTable;
use MY\UNI\MystrzaiTable;
use MY\UNI\MyzyavkiTable;

Loc::loadMessages(__FILE__);
class mymanag {

    public static function setmystrzai($a,$b)
    {




        $arValue = array(

            'UF_IDZAI' => $a,

            'UF_IDSTR' => $b
        );
        MystrzaiTable::add($arValue);




    }
    public static function getidst($a)
    {

        $myresault = MystrzaiTable::getList(array('select' => array('UF_IDSTR'),
            'filter'=>array('UF_IDZAI'=>$a)));
        while($arElements = $myresault->Fetch()) {

            $elements[] = $arElements;
        }
        foreach($elements as $val)
        {$vall[]=$val['UF_IDSTR'];}
if($vall==NULL) return array();

        $myresault = \CIBlockElement::GetList(
            $arOrder=Array(), //массив полей сортировки элементов и еёнаправления
            $arFilter = Array('IBLOCK_ID'=>'2','ID'=>$vall),
            $arGroupBy = false,
            $arNavStartParams= false,
            $arSelectFields = Array( 'NAME','PREVIEW_TEXT','ID','DETAIL_TEXT')
        );

while($arElements = $myresault->Fetch()) {
    //Получение информации о файле с регламентом расчетапоказателя: ссылка на файл на сервере, название файла и т.д.

$elements3[] = $arElements;

}
        return $elements3;
    }
    public static function otvet($boolznazh,$messeage)
    {
        $otv = array(

            "result" => $boolznazh,
            "message" => $messeage
        );
        return json_encode($otv);

    }
    public static function Setmyzyavki($json)
    {
        $json1 = json_decode($json);

        global $USER;
        //Получаем объект подключения к БД
        $db = Application::getConnection();
        //Начинаем транзакцию
        $db->startTransaction();

        $arValue = array(

            'UF_OPISANIE' =>$json1->UF_OPISANIE ,

            'UF_NAME' => $json1->UF_NAME,
            'UF_USER_ID' =>    $USER->GetID()
        );
        $result = MyzyavkiTable::add($arValue);
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
        return    mymanag::otvet('false','Повторите еще');
        }

        if ($result->isSuccess()) {
            $db->commitTransaction();


            return mymanag::otvet('true','Ваша заявку успешно принята');
        }
    }


    public   function Setmystat($json)
    {

        $json1 = json_decode($json);
        $el=new \CIBlockElement;
        global $USER;
        $arLoadProductArray = Array(

            "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => 2,

            "NAME"           => $json1->NAME,
            "ACTIVE"         => "Y",            // активен
            "PREVIEW_TEXT"   => $json1->PREVIEW_TEXT,
            "DETAIL_TEXT"    => $json1->DETAIL_TEXT
            );
        $el->add($arLoadProductArray);



            return mymanag::otvet('true', 'Ваша заявку успешно принята');




    }

    public static function Viewmyzyavki($params)
    {
        global $USER;
        if($params =='IDzyi') {

            $myresault = MyzyavkiTable::getList(array('select' => array('ID', 'UF_OPISANIE', 'UF_NAME')));
        }
        if($params =='IDuserzyi') {

            $myresault = MyzyavkiTable::getList(array('select' => array('ID', 'UF_OPISANIE', 'UF_NAME'),
                'filter'=>array('UF_USER_ID'=>$USER->GetID())));
        }
        if($params =='IDstatey') {


            $myresault = \CIBlockElement::GetList(
                $arOrder=Array(), //массив полей сортировки элементов и еёнаправления
                $arFilter = Array('IBLOCK_ID'=>'2'),
                $arGroupBy = false,
                $arNavStartParams= false,
                $arSelectFields = Array('NAME','PREVIEW_TEXT','ID','DETAIL_TEXT')
            );     }

        while($arElements = $myresault->Fetch()) {
            //Получение информации о файле с регламентом расчетапоказателя: ссылка на файл на сервере, название файла и т.д.

            $elements[] = $arElements;
        }
       // var_dump($elements);
        return $elements;
    }




}
?>