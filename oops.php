<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form{
            padding:30px 30px 60px 30px;
            margin-top:50px;
            border: 3px double silver;
            
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-6 offset-3">            
            <form method="POST" action="./oops.php" class="form">
            <h3 class="text-center">Login Form</h3>
            <hr>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" placeholder="Enter User Id" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control" />
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success float-right" >Login</button>
                </div>  
            </form>
        </div>
    </div>
</body>
</html>
<?php
    $auth = new abc();
    if(isset($_POST['submit'])){
        if($auth->login($_POST)){
            echo "login";
        }else{
            echo "fail";
        }
    }
    $auth->__deconstruct();


    class auth{
        public $demo  = 210;
        function __construct(){
            echo "constructor<br>";
        }
        function login($data){
            if($data['name']=="ganesh" && $data['password']=="123"){
                return true;
            }else{
                return false;
            }
        }
        function __deconstruct(){
            echo "deconstruct<br>";
        }
    }

    class abc extends auth{
        function __construct(){
            auth:: __construct();
            echo $this->demo;
        }

    }


// class parent{
//     public $abc;
//     private $xyz;
//     protected $pqr;
// }

// class base extends parent{
//     //$abc become public 
//     //$xyz on access
//     //$pqr become private 
// }

// class child extends base{
//      //$abc become public 
//      //$pqr not access 

// }


?>