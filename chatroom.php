<?php
//session_start();
if(isset($_SESSION['email'])){

  //  echo "Welcome ". $_SESSION['email'];
   // echo "<a href='?page=logout'>Log out</a>";
}else{
    header('Location: ?page=home');
}
?>
   <div class="container" style="min-height: 400px;">
        <div class="row">
        <br>
        <br>
<!--            <div class="col-md-push-2 col-md-4">
                <h3>Username: <span class="username label label-success" ></span></h3>
                <div class="row">
                    <form class="username-setter" action="index.html" method="post">
                        <div class="form-group">
                            <label for="">Set username</label>
                            <input type="text" name="name" value="" class="form-control username-input" >
                        </div>
                        <button class="btn btn-primary pull-right" type="submitbutton" name="button">Set</button>
                    </form>
                </div>
                <h3>Recently Messages</h3>      -->
 <div class="chat_box">
    <div class="chat_head"> Chat Box</div>
    <div class="chat_body"> 
    <div class="user"> Chat Now</div>
    </div>
  </div>

<div class="msg_box" style="right:290px">
    <div class="msg_head"><?php echo "Welcome ". $_SESSION['email'];?>
    <div class="close">x</div>
    </div>
    <div class="msg_wrap">
        <div class="msg_body">
            <ul class="messages-list">

                </ul>
            <div class="msg_push"></div>
        </div>
        <div class="msg_footer">

                 <ul class="messages-lst">

                </ul>
                <form class="chatForm" action="index.html" method="post">
                        <textarea type="button" id="message" name="message" id="msg_input" rows="4" class="form-control" value="">
                        </textarea>
                      <div class="">
                        <button type="submit" name="button" class="btn btn-primary pull-right" >Send</button>
                    </div>
                </form>
    </div>
</div>
</div>

            </div>
        </div>
    </div>