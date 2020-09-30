<?php 

class home extends DB{

public function insertReservation($name,$phone,$date,$category){
$sql="INSERT INTO reservation (name,phone,date,category)VALUES ('$name','$phone','$date','$category')";
$result=$this->connect()->query($sql);
return$result;

}
///////////////////////////////
public function insertMessage($message,$name,$email,$supject){
$sql="INSERT INTO contact (message,name,email,subject) VALUES('$message','$name','$email','$supject')";
$result=$this->connect()->query($sql);
return$result;




}






}



?>