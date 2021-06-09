<?php
namespace App\Controllers;


class LoginController extends BaseController{
    public function loginForm(){
        
        $this->render('auth.login');
    }
}


?>