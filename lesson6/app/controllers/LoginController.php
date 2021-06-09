<?php
namespace App\Controllers;


class LoginController extends BaseController{
    public function loginForm(){
        // dd(password_hash('123456', PASSWORD_DEFAULT));
        $this->render('auth.login');
    }
}


?>