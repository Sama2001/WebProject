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
$feedback=($_POST['feedback']);

$name=($_POST['coff']);
$price=($_POST['c']);

$num=($_POST['num']);
$date=($_POST['d']);
$time=($_POST['t']);
$email=($_POST['e']);
$phone=($_POST['p']);


if(isset($_POST['signup'])) {
    $sql = "INSERT INTO register(first_name,last_name,phone,city,email,password ) 
    VALUES ('$first','$last','$phone','$city','$email','$psw')";
   /* mysqli_query($conn, $sql);*/
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'not accepted email';
    }
    else {
        mysqli_query($conn, $sql);
        header('location:index.html');

        echo 'done';

    }
}
if(isset($_POST['send'])) {
    $sql = "INSERT INTO feedbacks( name,feedbacks ) 
    VALUES ('sama','$feedback')";
     mysqli_query($conn, $sql);
     header('location:index.html');
}

if(isset($_POST['choose'])) {
    if (!empty($_POST['c'])) {
        foreach ($_POST['c'] as $value) {
            $sql = "INSERT INTO orders( item,price,name,phone ) 
    VALUES ('$name','$price','sama','0598667006')";
            mysqli_query($conn, $sql);
            header('location:wake.php');
        }
    }
}

if(isset($_POST['reserve'])) {
    $sql = "INSERT INTO reservations( No_of_people,date,time,phone,email ) 
    VALUES ('$num','$date','$time','$phone','$email')";
    mysqli_query($conn, $sql);
    header('location:index.html');
}