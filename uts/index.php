<?php

include 'koneksi.php';

if(mysqli_connect_errno($conn)){
	echo "error";
}

$get_username =   $conn->real_escape_string($_GET['username']); 
$get_password =   $conn->real_escape_string($_GET['password']); 

$sql_select = mysqli_query($conn, "SELECT * FROM user WHERE username='{$get_username}' AND password='{$get_password}'" );

if(mysqli_num_rows($sql_select) == 0){
	die("username atau password salah");
}else{
	echo "Data sucsess";
}
