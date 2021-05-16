<?php

// tạo lớp dữ liệu
// tên class viết hoa chữ cái đầu của mỗi từ
// student => Student | TaiKhoan
// biến => class => thuộc tính
// hàm => class => phương thức/hành động
class Student{
    // hàm khởi tạo - thực thi khi 1 đối tượng thuộc lớp này được tạo ra
    // thực hiện code gì đó để ngay khi đối tượng đc tạo ra thì thực thi ngay
    function __construct($name, $age, $address, $rollnumber, $classname = "WE16101"){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->rollnumber = $rollnumber;
        $this->classname = $classname;
    }

    // tạo ra các thuộc tính của 1 lớp => các object được tạo ra từ class này sẽ 
    // có luôn các thuộc tính này
    // var $name;
    // var $age;
    // var $address;
    // var $rollnumber;

    // tạo ra các hành động/method của 1 lớp => các object đc tạo ra từ class sẽ
    // có thể thực hiện các hành động này
    function dangKyHoc(){
        echo "Đăng ký học";
    }

    function dropOut(){
        // $this đối tượng đang thực thi hành động
        echo $this->name . " Bị đuổi học<br>";
    }

    function doiTen($newName){
        $this->name = $newName;
    }
}
// tạo ra các đối tượng thuộc lớp sinh viên
// dấu -> thể hiện việc truy cập từ đối tượng đến thuộc tính hoặc phương thức của nó
$do_trung = new Student("Trương Văn Hân", 21, "Hà Nội", "PH00000");
$do_tuan = new Student("Đỗ Văn Tuấn", 18, "Hà Nam", "PH00001", "MOB1041");
$do_trung->dropOut();





?>