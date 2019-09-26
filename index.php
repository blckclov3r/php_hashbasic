<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
        <title>PHP Password Hashing -Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="container-fluid">

            <div class="jumbotron">
                <center><h1 class="display-4">PHP PASSWORD HASHING</h1></center>
                <center><p class="lead">Login</p></center>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div id="login_message"></div>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form method="POST">
                        <input id="email"  type="email" class="form-control" placeholder="Email..."><br/>
                        <input id="password" minlength="5" type="password" class="form-control"  placeholder="Password..."><br/>
                        <input type="submit" class="form-control  btn-info" id="loginBtn" value="Login">
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>