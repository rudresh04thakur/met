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

        }
        function register($data){
            include('../model/register.php');
            $register = new Register();
            if($register->up($data))
                echo "register successful";

        }

        function list($data){

        }

    }
?>