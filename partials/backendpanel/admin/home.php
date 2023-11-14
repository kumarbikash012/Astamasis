<?php
include('include/header.php');
include('include/navbar.php');
// include('include/sidebar.php');
?>

<?php
// session_start();

// if(isset($_SESSION['MSG'])){
//     echo $_SESSION['MSG'];
//     unset ($_SESSION['MSG']);
// }

if(isset($_POST['submit'])){
    include('config/dbconnect.php');
    $content=$_POST['editor'];
    $added_on= date('y-m-d h-i-s');
    $sql= "INSERT INTO `content` (`content`, `added_on`) VALUES ('$content', current_timestamp())";
    if(mysqli_query($conn,$sql)){
        // $_SESSION['MSG']='Data inserted';
        // header('location:backendpanel/home.php');
        // die();
    echo "Data inserted";
}
else{
    echo "please try again";
}
}

?>


<script src="ckeditor/ckeditor.js"></script>
<form method="post">
    <textarea id="editor" name="editor">   
    </textarea>
    <input type="submit" name="submit">
</form>

<script>  
CKEDITOR.replace('editor');
</script>

<?php
include('include/footer.php');
?>