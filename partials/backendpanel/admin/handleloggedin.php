<?php
$showError =false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('config/dbconnect.php');
    $email= $_POST['email'];
    $password= $_POST['password'];

    //check wheather this emailexist or not

    $Sql= "SELECT * From `usersmyadmin` where email = '$email'";
    $result= mysqli_query($conn, $Sql);
    // $numRows= mysqli_num_rows($result);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row= mysqli_fetch_assoc($result);
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['sno']=$row['sno'];
                $_SESSION['email']=$email;
                echo "logged in" . $email;
            }
            header("Location:index.php");
        }
        header("Location:index.php");
        // echo"not logged in";

  }

?> 

