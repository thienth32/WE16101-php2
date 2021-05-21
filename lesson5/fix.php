<?php

// khuôn để đúc ra các object
// những object đc tạo ra từ cái khuôn MayTinh thì có thể gọi đc các phương thức được định nghĩa
// trong class MayTinh này
class MayTinh{
    function __construct($name, $ram, $hdd){
        $this->name = $name;
        $this->ram = $ram;
        $this->hdd = $hdd;
    }

    public function nangCapRam($ram){
        $this->ram = $ram;
    }
}

class Hp extends MayTinh{

    public $brand;
    public $price;
    function __construct($name, $ram, $hdd, $brand, $price){
        parent::__construct($name, $ram, $hdd);
        $this->brand = $brand;
        $this->price = $price;
    }

    function nangCapRam(){
        // $this->nangCapRam(); // sai
        parent::nangCapRam(); // đúng
    }
}

$asus = new Hp("Asus ROG 2021", 4, 256, 'FPT Shop', 23000000);
var_dump($asus);
?>