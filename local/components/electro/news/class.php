<?php

use Local\ORM\Products;


class News extends CBitrixComponent
{
    public function executeComponent():void
    {
       dd( $this->arResult["PRODUCTS"] = Products::select(['*'],2));
        
       $this->includeComponentTemplate();
    }
}

