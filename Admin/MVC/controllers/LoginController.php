<?php 
    require_once("MVC/Models/login.php");
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }
        public function admin()
        {
            require_once("MVC/Views/Admin/index.php");
        }
        // public function logout()
        // {
        //     $this->login_model->logout();
        // }
    }
?>