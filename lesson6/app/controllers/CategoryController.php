<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController{
    public function index(){
        $cates = Category::all();
        $cates->load('products');
        
        $this->render('admin.category.index', compact('cates'));
    }

}


?>