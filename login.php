<?php
$conn=mysqli_connect('localhost','root','','wakeup');
if(!$conn){
    echo 'Error:'.mysqli_connect_error();
}

$first=$_POST['first'] ;
$last=$_POST['last'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$email=$_POST['email'];
$psw=md5($_POST['psw']);


if(isset($_POST['login'])) {
    $sql = "select * from register ";
    /* mysqli_query($conn, $sql);*/
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'not accepted email';
    }
    else {
        mysqli_query($conn, $sql);
        echo 'done';
        header('location:index.html');

    }
}