<?php


$con = mysqli_connect('localhost', 'root', '', 'mainprojectdata');
if ($con) {
	echo "connection successful";
} else {
	echo "no connection";
}
mysqli_select_db($con, 'mainprojectdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comments'];
$query = " insert into userinfodata (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";
mysqli_query($con, $query);


header('location:index.php');

?>