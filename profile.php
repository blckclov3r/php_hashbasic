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
                <center><h1 class="display-4" style="color: #006699;">PHP PASSWORD HASHING</h1></center>
                <center><p class="lead" style="color: #006699;">Login</p></center>
                <center><p  style="color: #006699;">test purpose only</p></center>
            </div>

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div id="login_message"></div>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row row_table" style="margin-top: 40px;">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <table class="table table-bordered table-responsive-md">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                            </tr>
                            <tr id="information"></tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <center>
                         <a href="logout.php" class="page-link"><i>Logout</i></a>
                    </center>
                </div>
                <div class="col-md-4"></div>
            </div>
      
        
       
        <div class="footer">
            <center><p>&copy; github.com/blckclov3r</p></center>
        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>