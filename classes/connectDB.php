<?php

class DB{

    protected function connect(){
    
    try{
        $conn=new PDO("mysql:host=localhost;dbname=resta",'root','');
        $conn->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
    return $conn;
    
    }catch(Exception $ex){
    echo"Error!".$ex->getMessage();
    }
    
    
    }
    
    }

?>