<?php

class Animal{

    public function helloPublic(){
        echo "phương thức public => hello Public<br>";
    }

    protected function helloProtected(){
        echo "phương thức public => hello Protected <br>";
    }

    private function helloPrivate(){
        echo "phương thức public => hello Private<br>";
    }


    public function runModifierMethod(){
        $this->helloPublic();
        $this->helloProtected();
        $this->helloPrivate();
    }

}

class Dog extends Animal{

    public function runParentMethod(){
        $this->helloPublic();
        $this->helloProtected();
        // $this->helloPrivate();
    }

}

$sam = new Animal();
$sam->runModifierMethod();
// $sam->helloPublic(); chạy
// $sam->helloProtected(); k chạy
// $sam->helloPrivate(); k chạy






?>