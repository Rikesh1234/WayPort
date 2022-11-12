<?php
session_start();
include("Backend_Database/connection.php");

if(isset($_SESSION['uname']) != ""){
    header("location:index.html");
}


if(isset($_POST['login'])){
    $u_name = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM login WHERE uname = '$u_name' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $password;
          if($row['uname']==$u_name && $row['password']==$password){
            $_SESSION['uname']=$u_name;
            if($row['type']=="user"){
            header("location:welcome.php");
            } else if($row['type']=="admin"){
                header("location:admin/dashboard.php");
            } else{
                header("location:driver/locatemap.php");
            }
          }
        }
      } else {
        echo "<script>alert('Wrong Username or password');window.location.href='login.php';</script>";
      }
    }
?>
