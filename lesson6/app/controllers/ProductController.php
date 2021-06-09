<?php 
namespace App\Controllers;

use App\Models\Category;

class ProductController extends BaseController{
    public function detail(){
        $this->render('clients.detail');
    }

    public function uploadForm(){
        // render có 2 tham số
        // Tham số 1: hiển thị cái file views nào ???? 
        // Tham số 2: truyền dữ liệu sẽ được hiển thị ngoài view
        $this->render('admin.product.upload-form');
    }
    public function saveImage(){
        $files = $_FILES['image'];
        dd($files);
        $names = $files['name'];
        $tmp_names = $files['tmp_name'];
        $imgs = [];
        foreach ($names as $index => $imgName) {
            $filename = 'public/uploads/' . uniqid() . '-' . $imgName;
            move_uploaded_file($tmp_names[$index], './' . $filename);
            $imgs[] = $filename;
        }

        dd($imgs);
        // $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        // move_uploaded_file($file['tmp_name'], './' . $filename);
        // dd($filename);
    }

    public function addForm(){
        $categories = Category::all();
        $this->render('admin.product.add-form', compact('categories'));
    }
}

?>