<!-- <?php
// session_start();
// include('config/dbconnect.php');

// if(isset($_POST['addUser'])){

    // $name=$_POST['name'];
    // $phone=$_POST['phone'];
    // $email=$_POST['email'];
    // $password=$_POST['password'];
    
    // $Sql= "INSERT INTO `usersmyadmin` (`name`, `phone`, `email`, `password`) VALUES ('$name', '$phone', '$email', '$password')";
    // $result= mysqli_query($conn, $Sql);
    
    // if($result){
    //     $_SESSION['status']= "user added successfully";
    //     header("Location: registered.php");
    // }
    // else{
    //     $_SESSION['status']= "registration failed";
    //     header("Location: registered.php");
    // }


// }

?> -->

<?php
$showError =false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('config/dbconnect.php');
    // $user_email= $_POST['SignupEmail'];
    // $pass= $_POST['SignupPassword'];
    // $cpass= $_POST['SignupcPassword'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass= $_POST['SignupcPassword'];

    //check wheather this emailexist or not

    $existSql= "SELECT * From `usersmyadmin` where email = '$email'";
    $result= mysqli_query($conn, $existSql);
    // $numRows= mysqli_num_rows($result);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError= "Email already in use";
    }
    else{
        if ($password==$cpass){
            $hash= password_hash($password,PASSWORD_DEFAULT);
            $sql= "INSERT INTO `usersmyadmin` (`name`, `phone`, `email`, `password`) VALUES ('$name', '$phone', '$email', ' $hash')";
            $result= mysqli_query($conn, $sql);
            if($result){
                $showAlert= true;
                header("Location:registered.php");
                exit();
            }

        }
        else{
            $showError = "passwords do not match";
            
        }
    }
    header("Location:index.php?=$showError");
//     echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>E-mail is already in use or Password and Conform password do not match</strong> You should check in on some of those fields below.
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times</span>
//     </button>
//   </div>';
//   echo"do not match";

}

?>