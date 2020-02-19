<?php
require 'header.php';
require 'config.php';



//EMPTY VARIABLES TO STORE DATA
$username = $email = $password  = '';

//EMPTY VARIABLES TO STORE ERROR
$usernameErr = $emailErr = $passwordErr = '';



if(isset($_POST['btn_login'])){


    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $emailErr = "Fill this field";
    }


    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $passwordErr = "Fill this field";
    }


//     HASH PASSWORD
    $password = md5($password);

//     CHECK IF EMAIL AND PASSWORD MATCH

    $sql ="SELECT `id`,`email`, `Password` FROM `users` WHERE email='$email' AND password = '$password'";

    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) >0){

//        GET INDIVINDUAL DATA FROM THE DB
        while($rows = mysqli_fetch_assoc($results)){
            $id = $rows['id'];
            $email = $rows['email'];
//            echo $id, $email;
            session_start();
            $_SESSION['kipande'] = $id;
            $_SESSION['loggedin'] =true;

//            TAKES USER TO INDEX PAGE
            header("location:index.php");
            exit();

        }

    }else{
//        IF USERNAME OR PASSWORD IS WROMG
//        echo "USER HAYUKO";
        header("location:login.php");
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
                            <h3>LOGIN HERE</h3>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>


                            <button class="btn btn-warning btn-block" name="btn_login">LOGIN</button>
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