<?php

namespace Local\ORM;

use Bitrix\Main\Loader;
use Local\Table\ORM\ProductTable;

class Products extends \CBitrixComponent
{
       public static function get(): array
    {
        return !Loader::includeModule('main') ?
               throw new \Exception('data is not found') :
              ProductTable::getList(
        [
                       'select' => ['*'],
                       'order' => ['ID' => 'ASC'],
                    ])->fetchAll();
    }
    
    public static function select(array $param, int $limit=1): array
    {     
     return !Loader::includeModule('main') ? 
            throw new \Exception('data is not found') :
            ProductTable::getList(
        [
                       'select' => $param,
                       'order' => ['ID' => 'DESC'],
                       'limit'=>$limit,
                       
                   ])->fetchAll(); 
    }

    public static function filter(array $param): array
    {
     return !Loader::includeModule('main') ? 
            throw new \Exception('data is not found') :
            ProductTable::getList(
        [
                       'select' => ['*'],
                       'filter' => $param,
                    ])->fetchAll();
    }
   
}
