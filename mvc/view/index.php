<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link href="../assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="row alert alert-success">
            <?php print_r($_COOKIE['msg']); ?>
        </div>
        <?php } ?>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                    <p>You are 30 seconds away from earning your own money!</p>
                    
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Login as a Employee</h3>
                            <form method="post" action="/met/mvc/controller/users.php" class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                                    </div>
                                   

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                   
                                    <input type="submit" name="login" class="btnRegister"  value="Login"/>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>]
        </div>
    </body>
</html>
