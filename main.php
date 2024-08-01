<?php
// $stu_id=$_POST['id'];
$stu_email=$_POST['email'];
$stu_password=$_POST['password'];
$conn=   mysqli_connect("localhost","root","","log") or die("connection failed");
$sql= "insert into student(email,password) values('{$stu_email}','{$stu_password}')";
$result=  mysqli_query($conn,$sql);
echo "form is submitted suceessfully";

?>