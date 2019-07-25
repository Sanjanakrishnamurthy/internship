<?php 
include "conn.php";


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=password_hash($password, PASSWORD_BCRYPT);
$address=$_POST['address'];
$branch=$_POST['branch'];

$query="INSERT INTO `users`(`name`,`email`,`password`,`address`,`branch`)VALUES('$name','$email','$password','$address','$branch')";
$result=mysqli_query($con,$query);

if($result){
	echo "successfuly  inserted";

}
else{
	echo "failed to connect";
}

?>