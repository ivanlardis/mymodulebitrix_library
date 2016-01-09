<?php
namespace MY\UNI;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class MystrzaiTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*�������� ������� HL � ��*/
    public static function getTableName()
    {
        return 'zaistr';
    }
    /*�������� ����� �������� (������������ ����� HL DepartmentKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true),


            'UF_IDZAI' => array(
                'data_type' => 'integer'
            ),
            'UF_IDSTR' => array(
                'data_type' => 'integer'
            )
        );
    }

}
