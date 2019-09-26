

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Password Hashing -Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="container-fluid">

            <div class="jumbotron">
                <center><h1 class="display-4" style="color: #006699;">PHP PASSWORD HASHING</h1></center>
                <center><p class="lead" style="color: #006699;">Registration</p></center>
                <center><p  style="color: #006699;">test purpose only</p></center>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div id="registration_message"></div>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form method="POST">
                        <input id="name"  minlength="3" class="form-control"  placeholder="Name..."><br/>
                        <input id="email"  type="email" class="form-control" placeholder="Email..."><br/>
                        <input id="password" minlength="5" type="password" class="form-control"  placeholder="Password..."><br/>
                        <input id="repassword" minlength="5" type="password" class="form-control" placeholder="Re-Enter Password..."><br/>

                        <input type="submit" class="form-control  btn-info" id="registerBtn" value="Register">
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row" style="margin-top: 14px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center>
                         <a href="index.php" class="page-link"><i>Already have account? Signin</i></a>
                    </center>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

        <div class="footer">
            <center><p>&copy; github.com/blckclov3r</p></center>
        </div>
        
        <script src="js/jquery-3.4.1.min.js" ></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js" async defer></script>
        
    </body>
</html>


