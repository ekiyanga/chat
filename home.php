<?php
    $myemail = "doctor";
    $mypass = "1234";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $rem = $_POST['remember'];

        if( $email == $myemail and $pass = $mypass ){
            if(isset($_POST['remember'])){
                setcookie('email', $email, time()+60*60*7);
                setcookie('pass', $pass, time()+60*60*7);
            }
            session_start();
            $_SESSION['email'] = $email;
            header("Location: ?page=chatroom"); 
        } else {
            echo "Invalid<a href='?page=home'>Try Again</a>";
        }

    }//else{
    //  header("Location: ?page=login");
    //}
?>
  <div class="breadcrumb">
        <div class="container-fluid text-center">        
            <h1><small>Welcome To </small> Doctors Chat Room</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8" style="background: url('images/photo_black_docs.jpg') no-repeat center/cover; min-height: 400px;">
            </div>
            <div class="col-md-4">
        <div class="card card-container" style="border-top:5px solid firebrick;">
            
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="login" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Click Here To Register
            </a>
        </div><!-- /card-container -->
        </div>
    </div>

    
