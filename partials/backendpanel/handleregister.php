<?php
$showError =false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'dbconnect.php';
    $user_email= $_POST['SignupEmail'];
    $pass= $_POST['SignupPassword'];
    $cpass= $_POST['SignupcPassword'];

    //check wheather this emailexist or not

    $existSql= "SELECT * From `username` where user_email = '$user_email'";
    $result= mysqli_query($conn, $existSql);
    // $numRows= mysqli_num_rows($result);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError= "Email already in use";
    }
    else{
        if ($pass==$cpass){
            $hash= password_hash($pass,PASSWORD_DEFAULT);
            $sql= "INSERT INTO `username` ( `user_email`, `user_pass`, `timestamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result= mysqli_query($conn, $sql);
            if($result){
                $showAlert= true;
                header("Location:/forum/index.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "passwords do not match";
        }
    }
    header("Location:/forum/index.php?signupsuccess=false&error=$showError");

}

?> 