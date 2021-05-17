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
        // $data = [
        //     'name' => 'value',
        //     'email' => 'value',
        //     'role' => 'value',
        //     'password' => 'value'
        // ];
        // dựa vào key & value của mảng data => câu lệnh insert vào bảng tương ứng
        // insert into users (name, email, role, password) values ('gtri name', 'gtri email', 'gtrirole', 'gtri password');
        // return luôn bản ghi vừa insert
    }

    function update ($data = []){
        // làm tương tự như insert tuy nhiên sửa câu lệnh thành câu lệnh update
    }

}


?>