<?php 
ob_start();

 include "include/header.php";
include "classes/users.php";


$msg='';
if(isset($_POST['login'])){
$username=$_POST['username'];
$passord=$_POST['password'];
$_SESSION['username']=$username;
if(empty($_POST['username'])){
    $msg="<div class='alert alert-success' role='alert'>
    Write Your Username!
  </div>";
}elseif(empty($_POST['password'])){
     $msg="<div class='alert alert-success' role='alert'>
    Write Your Password!
  </div>";}else{
    $users=new users();
   $users->login($username,$passord);
$_SESSION['username']=$_POST['username'];
}
}

?>


<div class="bradcam_area bradcam_bg_2">
    <div class="container ">
        <div class="row">
            <div class=" col-sm3-md-6-lg-8 ">

                <form action="" method="POST" class="form-group" style="padding-left:100px">
                    <h4 style="text-align: center;"><?php  echo$msg;    ?></h4>

                    <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                    <br>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    <br> <br>

                    <input type="submit" name="login" value="login" class="btn btn-primary">
                    <br> <br>
                    <p style="color: white"> I don't have any account ? <a href="signup.php" class="btn btn-success">
                            signup now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>




<?php  include "include/footer.php" ?>