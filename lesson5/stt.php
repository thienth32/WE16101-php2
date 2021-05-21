<?php

// static nó là các thành phần được quy định rằng 
// có thể truy cập đến nó mà không cần phải thông qua
// object
// trong hàm static thì không được sử dụng $this 
// vì khi gọi hàm static nó không tạo ra object => k biết $this là thằng nào
class BaseModel {

    static function all(){
        $model = new static();
        var_dump($model);
        $query = "select * from $model->table";
        return $query;
    }
}

class User extends BaseModel{
    public $table = "users";
}


class Product extends BaseModel{
    public $table = "products";
}


User::all();


?>