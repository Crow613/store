<?php

use Local\ORM\Products;

class  filter extends CBitrixComponent
{
    public function executeComponent():void
    {
        
       $this->arResult['PRODUCT'] = Products::filter([
        
                'LOGIC' => 'OR',
                [
                    'CATEGORY' => $_GET['category']
                ],
                [
                    'BRAND' => $_GET['brand']
                ],  
            ]);
           
            !$this->arResult['PRODUCT'] ? $this->arResult['PRODUCT'] = [] : $this->arResult['PRODUCT'];

            $this->includeComponentTemplate();
    }

}