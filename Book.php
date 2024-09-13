<?php
class Book{
    public $publishers =[];
    public $writer;
    public $color;
    public $supplier;
    
    function choosePublisher($num){
        return $this->publishers [$num];
    }
}



?>