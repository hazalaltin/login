<?php

include_once('connection.php');

class User {
    
    private $db;
    
    public function __construct(){
        
        $this->db=new Connection();
        $this->db=$this->db->dbConnect();
}

public function Login($name,$pass)
{
    
      if(!empty($name)&& !empty($pass)) //checking if they are empty or not
      {
        $st=$this->db->prepare("select * from users where name=?  and pass=?"); //query
        
        $st->bindParam(1,$name);
        $st->bindParam(2,$pass);
        
        $st->execute();
        
        if($st->rowCount() == 1){
            echo"user is ok";
        }else{
            echo "user not ok ";
        }
        
      }   else{
        echo "plase enter the details";
      }
}
}

?>
