<?php
    if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];

        //header('Location: news.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Doctors ChatRoom</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    </head>
    <body>
    
    <!--nav bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top bg-inverse" id="navbar">
        <div class="container">
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="" class="navbar-brand">Doctor Chat Room</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=chatroom">Chat Room</a></li>
                    <li><a href="?page=news">News</a></li>
                    <li><a href="?page=aboutus">About US</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION['email'])){

                        //echo "Welcome ". $_SESSION['email'];
                        echo "<li><a href='?page=logout'>Log out</a><li>";
                    }else{
                        echo '<li><a href="?page=login">Log In</a></li>';
                    }
                    ?>


                </ul>
            </div>
        </div>
    </nav><!--End of Nav Bar-->
<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
    $filename = $page.'.php';
    
    if(file_exists($filename)){
        include $filename;
    } else {
        include 'defaultPage.php';
        }
    }else{
    include 'home.php';
}

?>
<hr>
    <div class="container text-center">
        <footer>
            <ul class="list-inline">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">YouTube</a></li>
            </ul>
        </footer>
    </div>
        <hr>
        <div class="container text-center">
            &copy; 2017
        </div>
    </body>
    <script src="js/jquery.js" ></script>
    <script src="js/jquery.cookie.js" ></script>
    <script src="js/main.js" ></script>
    <script src="js/script.js" ></script>    
</html>
