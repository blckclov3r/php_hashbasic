<?php
    session_start();
    require 'db.php';
    
    class DatabaseOperation extends Database{
        

        public function register(){

            $name = $this->getConn()->real_escape_string($_POST['name']);
            $email = $this->getConn()->real_escape_string($_POST['email']);
            $password = $this->getConn()->real_escape_string($_POST['password']);
            $repassword = $this->getConn()->real_escape_string($_POST['repassword']);

            if($password != $repassword){
                echo "
                    <div class='alert alert-danger' role='alert'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                    <b>Please check your password again</b>
                    </div>
                ";
            }else{

                $sql = "SELECT id FROM users WHERE email = '$email' LIMIT 1";
                $query = mysqli_query($this->getConn(),$sql);
                $count = mysqli_num_rows($query);

                if($count > 0){
                    echo "
                    <div class='alert alert-danger' role='alert'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                        <b>The email you entered is not available, please use another email address</b>
                    </div>
                    ";                  
                }else{
                    $hash = password_hash($password,PASSWORD_BCRYPT);
                    $sql = "INSERT INTO users (name,email,password) VALUES('$name','$email','$hash')";
                    $query = mysqli_query($this->getConn(),$sql);
                    if($query){
                        echo "
                             <div class='alert alert-success' role='alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                            <b>Successfully added</b>
                            </div>

                            <script>
                                setTimeout(function () {
                                    window.location.href = 'index.php?success';
                                }, 3000); 
                            </script> 
                        ";
                        exit();
                    }else{
                        echo "
                            <div class='alert alert-danger' role='alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                            <b>Something went wrong</b>
                            </div>
                            ";
                    }
                }
            }
          
        }

        public function login(){
           
            $password = $this->getConn()->real_escape_string($_POST['password']);
            $email = $this->getConn()->real_escape_string($_POST['email']);

            if($email == ""){
                echo "
                <div class='alert alert-warning' role='alert'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                    <b>Don't leave the email field empty</b>
                    </div>
                ";
                exit();
            }
            if($password == ""){
                echo "
                <div class='alert alert-warning' role='alert'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                    <b>Password is required</b>
                    </div>
                ";
                exit();
            }

            $sql = "SELECT id,password FROM users WHERE email ='$email'";
            $query = mysqli_query($this->getConn(),$sql);
            $count = mysqli_num_rows($query);
            if($count > 0){
                $row = mysqli_fetch_assoc($query);
                if(password_verify($password,$row['password'])){

                    $_SESSION['uid'] = $row['id'];
                    
                    echo "
                          <div class='alert alert-success' role='alert'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                          <b>You have been logged in successfully!</b>
                          </div>

                          <script>
                            setTimeout(function () {
                                window.location.href = 'profile.php';
                            }, 1200); 
                          </script> 
                        ";
                    
                    
                }else{
                    echo "
                    <div class='alert alert-danger' role='alert'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                    <b>Please check the email or password again</b>
                    </div>
                     ";
                }
            }else{
                echo "
                <div class='alert alert-danger' role='alert'>
                <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                <b>The email you've entered is not exist in our database</b>
                </div>
                 ";
            }
          
        }

        public function profile(){
            $uid = $_SESSION['uid'];
            $sql = "SELECT * FROM users WHERE id = '$uid'";
            $query = mysqli_query($this->getConn(),$sql);
            $row = mysqli_fetch_array($query);
            if($row > 0){
                echo "
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['password']."</td>
                ";
            }
        }
    }


    $obj = new DatabaseOperation();
    


    if(isset($_POST['registerBtn'])){
       $obj->register();
    }

    if(isset($_POST['loginBtn'])){
        $obj->login();
    }

    if(isset($_POST['information'])){
        $obj->profile();
    }
?>