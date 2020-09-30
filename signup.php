<?php 
ob_start();

 include "include/header.php" ;
include "classes/users.php";

 //////////////////////////////////////
$msg='';
if(isset($_POST['submit'])){

$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$_POST['username'];

if(empty($_POST['email'])){
    
     $msg="<div class='alert alert-success' role='alert'>
    Write Your Email!
  </div>";
    
}elseif(empty($_POST['username'])){
    $msg="<div class='alert alert-success' role='alert'>
    Write Your Username!
  </div>";
}elseif(empty($_POST['password'])){
     $msg="<div class='alert alert-success' role='alert'>
    Write Your Password!
  </div>";
}elseif($_POST['password'] !=$_POST['re-password']){
    $msg="<div class='alert alert-success' role='alert'>
    Password is invalid!
  </div>";
}else{
$users=new users();
$users->signup($email,$username,$password);


      
}
}
///////////////////////////////////////////


?>


<div class="bradcam_area bradcam_bg_2">
    <div class="container ">
        <div class="row">
            <div class="col col-md-6">
                <form action="" method="POST" class="form-group" style="padding-left:100px">
                    <h4 style="text-align: center;"><?php  echo$msg;    ?></h4>
                    <div class="form-group">
                        <div class="form-control bg-transparent"
                            style="margin: 4vmin 0 0 0; border:none; border-bottom:solid 2px white; width:80%">
                            <label style="color: white; margin-right:3vmin;" for="email"> <i
                                    class="fa fa-envelope fa-2x"></i> </label>
                            <input style="background-color: transparent; border:none; color:white; width:80%"
                                type="text" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-control bg-transparent"
                            style="margin: 4vmin 0 0 0; border:none; border-bottom:solid 2px white; width:80%;">
                            <label style="color: white; margin-right:3vmin;" for="username"> <i
                                    class="fa fa-user fa-2x"></i></label>
                            <input style="background-color: transparent; border:none; color:white; width:80%"
                                type="text" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-control bg-transparent"
                            style="margin: 4vmin 0 0 0; border:none; border-bottom:solid 2px white; width:80%">
                            <label style="color: white; margin-right:3vmin;" for="password"> <i
                                    class="fa fa-lock fa-2x"></i></label>
                            <input style="background-color: transparent; border:none; color:white; width:80%"
                                type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-control bg-transparent"
                            style="margin: 4vmin 0 0 0; border:none; border-bottom:solid 2px white; width:80%">
                            <label style="color: white; margin-right:3vmin;" for="repassword"> <i
                                    class="fa fa-lock fa-2x"></i></label>
                            <input style="background-color: transparent; border:none; color:white; width:80%"
                                type="password" name="re-password" id="re-password" placeholder="Re-Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="signup" class="btn btn-primary">
                    </div>
                    <div class="form-group">
                        <p style="color: white"> I have already account ? <a href="login.php" class="btn btn-secondary">
                                login now</a>
                        </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>




<?php  include "include/footer.php" ?>