<?php
session_start();
include("Backend_Database/connection.php");

if(isset($_SESSION['uname']) != ""){
    header("location:index.html");
}

if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $sql = "SELECT * FROM login WHERE uname = '$username'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          if($row['uname']==$username){
            echo "<script>alert('Please choose another username');window.location.href='signup.php';</script>";
          }
        }
      } else {
        $loginValue = "INSERT INTO login VALUES (null,'$username','$password',null,'user')";
        $userValue = "INSERT INTO user VALUES (null,'$name','$phone','$email')";
        mysqli_query($conn,$loginValue);
        mysqli_query($conn,$userValue);
        header("location:eutamap.php");
    }
    }

?>