<?php
    include 'db.php';
    
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
                
                $hash = password_hash($password,PASSWORD_BCRYPT);
                $sql = "INSERT INTO users (name,email,password) VALUES('$name','$email','$hash')";
                $query = mysqli_query($this->getConn(),$sql);
                if($query){
                    echo "
                            <div class='alert alert-success' role='alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
                            <b>Successful registered</b>
                            </div>
                        ";
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


    $obj = new DatabaseOperation();
    


    if(isset($_POST['registerBtn'])){
        $obj->register();
    }
?>