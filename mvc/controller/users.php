<?php
   
    $data = $_POST;
    $users = new Users();

    if(isset($_POST['register'])){
        $users->register($data);
    }else if(isset($_POST['login'])){
        $users->login($data);
    }else{
        $users->list($data);
    }
    class Users{
        function login($data){
            include('../model/login.php');
            $login = new Login();
            if($login->up($data)){
                setcookie('msg','Login Successful',time()+(24*60*60),"/met/mvc/view/");
                header("Location: http://localhost/met/mvc/view/list.php");
            }else{
                setcookie('msg','Login unsuccessful',time()+(24*60*60),"/met/mvc/view/");
                header("Location: http://localhost/met/mvc/view/index.php");
            }
        }
        function register($data){
            include('../model/register.php');
            $register = new Register();
            if($register->up($data)){
                setcookie('msg','Register Successful',time()+(24*60*60),"/met/mvc/view/");
                header("Location: http://localhost/met/mvc/view/index.php");
            }
        }

        function list($data){

        }

    }
?>