<?php
namespace MY\UNI;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class MyzyavkiTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*�������� ������� HL � ��*/
    public static function getTableName()
    {
        return 'myelzai';
    }
    /*�������� ����� �������� (������������ ����� HL DepartmentKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true),
            'UF_USER_ID' => array(
                'data_type' => 'integer'
            ),

            'UF_OPISANIE' => array(
                'data_type' => 'string',
                'required' => true
            ),
            'UF_NAME' => array(
                'data_type' => 'string',
                'required' => true
            )
            //��������� ��� ����� � ������� ��������� (������� �����)

        );
    }

}
