<?php 
include('connect.php');
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if($username=='Admin' && $password=='9876' ){
     
    
     echo '<script>
    window.location="./detail.php";
    </script>';
}
else{
    echo '<script>
    alert("Invalid credentials or you  are group ");
    window.location="../home.html";
    </script>';
}


?>
