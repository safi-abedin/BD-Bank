<?php  
$servername = 'localhost';  
$username = 'root';  
$password = '';  
$dbname = 'new';
$con= mysqli_connect ($servername , $username , $password) or die('unable to connect to host');  
mysqli_select_db($con,$dbname);
$username=$_POST['Email'];
$password=$_POST['Pass'];
$sql = "INSERT INTO  `registration` (`Email`,`Pass`)
       VALUES ($username,$password)";    

       echo "$username";
>