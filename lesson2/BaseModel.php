<?php
class BaseModel{
    function getConnect(){
        $conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", "root", "12345678");
        return $conn;
    }


    function all(){
        $conn = $this->getConnect();
        $query = "select * from " . $this->table;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function find($id)
    {
        // thực hiện lệnh tìm 1 bản ghi dựa vào id => select * from tên bảng where id = $id 
    }

    // $userModel = new User();
    // $listUser = $userModel->search('email', 'like', "%thien%");
    // $listUser = $userModel->search('id', '>', "10");
    // => select * from users where email like '%thien%'
    // => select * from users where id > 10
    function search($colName, $condition, $value)
    {
        // thực hiện câu lệnh tìm kiếm 1 điều kiện => select * from tên bảng where $colName $condition $value => danh sách
    }

    function remove($id){
        // thực hiện câu lệnh xóa 1 bản ghi dựa vào id
        // delete from tên bảng where id = $id
    }

    function insert($data = []){
        $columnName = "";
        $valuesStr = "";
        foreach($data as $key => $value){
            $columnName .=  "$key,";
            $valuesStr .= "'$value',";
        }
        $columnName = rtrim($columnName, ",");
        $valuesStr = rtrim($valuesStr, ",");
        echo "<pre>";
        // var_dump($data, $columnName, $valuesStr);
        $query = "insert into " . $this->table 
            . " ($columnName) values ($valuesStr)";
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $data["id"] = $conn->lastInsertId();
        return $data;
    }

    function update ($data = []){
        // làm tương tự như insert tuy nhiên sửa câu lệnh thành câu lệnh update
    }

}


?>