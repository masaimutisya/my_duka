<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/main.css">
    <title>Duka Moja</title>
</head>
<body>

<!--START OF NAVBAR-->

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="index.php">DukaMoja</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <?
            session_start();
            if(isset($_SESSION['mtumizi'])){
                $user = $_SESSION['mtumizi'];
                if($user == 'supplier'){
                    echo '
                    <li class="nav-item">
                     <a class="nav-link" href="dash.php">Dashboard</a>
                     </li>
                    
                    ';
                }
            }


            if(isset($_SESSION['loggedin'])){
//                IF LOGGED IN
                echo '
                <li class="nav-item">
                <a class="nav-link" href="logout.php">logOut</a>
                </li>
                ';

            }else{
                echo'
                <li class="nav-item">
                <a class="nav-link" href="signup.php">SignUp</a>
                </li>
                 <li class="nav-item">
                <a class="nav-link" href="login.php">logIn</a>
                </li>
                
                ';
            }
            ?>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<!--END OF NAVBAR-->




