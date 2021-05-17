<?php
require_once './BaseModel.php';
class Product extends BaseModel{
    var $table = 'products';

    function all(){
        $query = "select products.*, categories.cate_name as cate_name from " 
                . $this->table . " join categories on products.cate_id = categories.id";
        // echo $query; die;
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function search($colName, $condition, $searchValue){
        $query = "select products.*, categories.cate_name as cate_name from " 
                . $this->table . " join categories on products.cate_id = categories.id " 
                . "where $colName $condition '$searchValue'";
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>