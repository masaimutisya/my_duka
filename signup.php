<?php
require 'header.php';
require 'config.php';



//EMPTY VARIABLES TO STORE DATA
$username = $email = $password1 = $password2 = $usertype = '';

//EMPTY VARIABLES TO STORE ERROR
$usernameErr = $emailErr = $password1Err = $password2Err = $usertypeErr = '';



if(isset($_POST['btn_signup'])){

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }else{
        $usernameErr = "Fill this field";
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $emailErr = "Fill this field";
    }

    if(isset($_POST['usertype'])){
        $usertype = $_POST['usertype'];
    }

    if(isset($_POST['password1'])){
        $password1 = $_POST['password1'];
    }else{
        $password1Err = "Fill this field";
    }

    if(isset($_POST['password2'])){
        $password2 = $_POST['password2'];
    }else{
        $password2Err = "Fill this field";
    }

//    CHECK IF PASSWORD MATCH
    IF($password1 != $password2){
        $password1Err = "PASSWORD DO NOT MATCH";
    }else{

//        CHECK IF USER EXISTS

        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $results = mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) >0){
            header("location:login.php");
            exit();
        }

//        HASH PASSWORD
        $password1 = md5($password1);

//        ADD USER
        $sql = "INSERT INTO `users`(`id`, `username`, `email`, `Password`, `usertype`) VALUES (NULL,'$username','$email','$password1','$usertype')";

        if(mysqli_query($conn, $sql)){
//            TAKE USER TO INDEX PAGE
            header('location:login.php');
            exit();
        }else{
            echo "Error:".mysqli_error($conn);
        }




    }
}





?>





<!--REGISTRATION FORM-->

<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="form-section">
                <form action="<? echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <h3>SIGNUP HERE</h3>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                        <div class="input-group">
                            <span>
                                Supplier <input type="radio" name="usertype" value="supplier">
                            </span>
                            <span>
                            Customer <input type="radio" checked name="usertype" value="customer">
                            </span>
                        </div>
                        <button class="btn btn-warning btn-block" name="btn_signup">CREATE ACCOUNT</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>





<?php
require 'footer.php';

?>