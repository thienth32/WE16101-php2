<?php

// static nó là các thành phần được quy định rằng 
// có thể truy cập đến nó mà không cần phải thông qua
// object
// trong hàm static thì không được sử dụng $this 
// vì khi gọi hàm static nó không tạo ra object => k biết $this là thằng nào
class BaseModel {

    static function all(){
        $model = new static();
        $model->queryBuilder = "select * from $model->table";
        return $model;
    }

    public function where($col, $condition, $value){
        $this->queryBuilder .= " where $col $condition '$value'";
        return $this;
    }

    public function get(){
        $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", "root", "12345678");
        $stmt = $connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

class User extends BaseModel{
    public $table = "users";
}


class Product extends BaseModel{
    public $table = "products";
}


var_dump(User::all()->get()); 

// select * from users where name like '%thienth%'


?>