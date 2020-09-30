<?php

include 'connectDB.php';
class users extends DB{

    public function signup ($email,$username,$password){
        $sql = "SELECT Count(Username) AS Num FROM users WHERE username = ? ";
        $result = $this->connect()->prepare($sql);
        $result->execute(array($username));
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row['Num'] > 0)
        echo " <div class='alert-danger'>Your Username is required! </div>";
            else{
                $sql = "INSERT INTO users(email,username,password) VALUES (?,?,?)";
                $result = $this->connect()->prepare($sql);
                $result->execute(array($email,$username,$password));
                header("location:login.php");
            }
    }




public function login($username,$password){
    
$sql="SELECT * FROM users WHERE username=? AND password=?";
$result=$this->connect()->prepare($sql);
$result->execute(array($username,$password));
if($result->rowCount()==1){
    $row=$result->fetch();
    $_SESSION['usernmae']=$username;
if($row['admin']=="")
header('location:index.php');
else
header('location:./dashboard/admin.php');



}else{
    echo"<div class='alert alert-success' role='alert'>
    username is not exist!
  </div>";
}


 }



}