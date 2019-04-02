<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List Page</title>
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
        <table class="table table-striped">
            
        </table>

    
</body>
</html>