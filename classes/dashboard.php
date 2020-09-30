<?php


class admin extends DB{

public function selectCategory(){
$sql="SELECT * FROM category ORDER BY id DESC";
$result=$this-> connect()->query($sql);
if($result->rowCount() >0){
    while($row=$result->fetch()){
        $data[]=$row;

    }
    return $data;
}

}
   ////////////////////////////////////////////////

public function delete($id){
$sql="DELETE FROM category WHERE id='$id'";
$this->connect()->query($sql);


}
///////////////////////////////////////////////////////////
public  function insertCategory($name){
$sql="INSERT INTO category (name) VALUES ('$name') ";
$result=$this->connect()->query($sql);
return $result;


}
//////////////////////////////////
public function selectfoods(){
$sql="SELECT * FROM foods ";
$result=$this->connect()->query($sql);
if($result->rowCount() >0){
    while($row=$result->fetch()){
        $data[]=$row;

    }
    return $data;
}
    
}
//////////////////////////////////////////////////////
public function deleteFood($id){

$sql="DELETE FROM foods WHERE id='$id'";
$this->connect()->query($sql);


}

///////////////////////////////
 public function insertFood($food,$foodImage,$desc,$price,$category){
$sql="INSERT INTO foods (name,image,description,price,category_id)VALUES ('$food','$foodImage','$desc','$price','$category')";
$result=$this->connect()->query($sql);
return $result;





 }
////////////////////////////////////
public function selectReservation(){
    $sql="SELECT * FROM reservation ";
    $result=$this->connect()->query($sql);
    if($result->rowCount() >0){
        while($row=$result->fetch()){
            $data[]=$row;
    
        }
        return $data;
    }
        
    }
///////////////////////////
public function deleteRes($id){

    $sql="DELETE FROM reservation WHERE id='$id'";
    $this->connect()->query($sql);
    
    
    }
    public function deleteContact($id){

        $sql="DELETE FROM contact WHERE id='$id'";
        $this->connect()->query($sql);
        
        
        }
////////////////////////////
public function selectContact(){
    $sql="SELECT * FROM contact ";
    $result=$this->connect()->query($sql);
    if($result->rowCount() >0){
        while($row=$result->fetch()){
            $data[]=$row;
    
        }
        return $data;
    }
        
    }


}