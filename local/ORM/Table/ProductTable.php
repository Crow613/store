<?php

namespace Local\Table\ORM;

use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;

class ProductTable extends DataManager
{
    public static function getTableName(): string
    {
        return "b_product"; 
    }

    public static function getMap(): array
    {
        return [
            "ID" => new IntegerField("ID", [
                'primary' => true,
                'autoincriment' => true,
            ]),
            "NAME" => new StringField('NAME'),
            "CATEGORY" => new StringField('CATEGORY'),
            "BRAND" => new StringField('BRAND'),
            "DESCRIPTION" => new StringField('DESCRIPTION'),
            "PRICE" => new IntegerField('PRICE'),
            "OLD_PRICE" => new IntegerField('OLD_PRICE'),
            "QUANTITY" => new IntegerField('QUANTITY'), 
            "LIKE" => new IntegerField('LIKE'), 
           
        ];
    }
}
