<?php

include_once ('User.php');

if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $name=$_POST['pass'];
    
    $object = new User; // creating object from user
    $object->Login($name,$pass);
}



?>

<html>
    
    <head></head>
    
    <body>
        
        <form method="ppst" action="index.php">
            Username: <input type="text" name="user"/>
            Password: <input type="text" name="pass"/>
            
             <input type="submit" name="submit" value="Login"/>
                      
        </form>
              
              
    </body>
</html>
