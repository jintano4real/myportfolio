<?php
session_start();
$db= mysqli_connect("localhost", "root","","goodman");
$id="";
$name="";
$email="";
$phone="";
$subject="";
$message="";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="INSERT INTO folio (name,email,phone,subject,message) VALUES('$name','$email','$phone','$subject','$message')";
    $query=$db->query($sql);

if($query){
    header('location:contact.php');

}
}


?>