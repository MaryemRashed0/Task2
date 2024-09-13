<?php
class Product {
    public $name;
    public $price ;

    public $description;
    public $image;

    function uploadImage($url){
        return $url;
    }

    function calcPrice($dis){
        $finalprice = $this->price - ($this->price*$dis/100);
        return $finalprice;
    }




}





?>