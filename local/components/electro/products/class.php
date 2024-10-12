<?php
use Local\ORM\Products;


class Product extends \CBitrixComponent
{
    public function executeComponent(): void
    {
        $this->arResult["PRODUCTS"] = Products::get();
     
        $this->includeComponentTemplate();
    }
}
