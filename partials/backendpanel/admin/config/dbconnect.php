
<?php
$host="localhost";
$username="root";
$password="";
$database="astamasisadminpanel";
//database connect
$conn=mysqli_connect("$host","$username","$password","$database");

if(!$conn){
    header("Location: ../errors/db.php");
    die();
    // die(mysqli_connect_error($conn));

}
// else{
//     echo"database connected!!!";
// }
?>