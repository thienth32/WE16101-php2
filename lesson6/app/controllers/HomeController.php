<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController{
    public function index(){

        // select * from products where price > 3000 and cate_id = 5 order by name desc   
        // Product::where('price', '>', 3000)->where('cate_id', 5)->orderBy('name', 'desc')->get();
        
        // // select * from products where (price < 3000 or cate_id = 4) or name like '%trung%'
        // Product::where(function($query){
        //     $query->where('price', '<', 3000)
        //         ->orWhere('cate_id', 4);
        // })->orWhere('name', 'like', "%trung%")
        // ->get();
        
        // $products = Product::all();
        // $products->load('category');
        // $data = $_GET;
        // $model = new Product();
        // $model->fill($data);

        $product = Product::find(345);
        $product->load('category', 'galleries');
        // echo "<pre>";
        // var_dump($product->category->cate_name);die;
        include_once './app/views/clients/homepage.php';
    }

    public function detail(){
        echo "HomeController => detail()";
    }
}


?>