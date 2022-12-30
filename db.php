<?php      
    $host = "localhost"; 
    // $user = "root";
    // $password = ""; 
    $user = "ias2020";  
    $password = 'ecell123';  
    $db_name = "suc_login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  