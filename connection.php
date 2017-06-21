<?php

class Connection{
    
    public function dbConnect() {
        
        return new PDO("mysql:localhost=localhost; dbname=login" , "root", "");
    }
}
?>
