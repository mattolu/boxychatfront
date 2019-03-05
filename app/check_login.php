<?php

require_once __DIR__.'/inc_application.php';


$tbl_name="members"; // Table name annot select DB

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn,$myusername);
$mypassword = mysqli_real_escape_string($conn,$mypassword);

$encrypted_mypassword=md5($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
$result=mysqli_query($conn,$sql);

// mysqli_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = 'asdasd';
//session_register("mypassword");
header("location:index.php");
}
else {
echo "Wrong Username or Password";
}
?>