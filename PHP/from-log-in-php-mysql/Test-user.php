<?php
$conn=mysqli_connect("localhost","root","") 
                        or die('khong the ket noi');
mysqli_select_db($conn,"user_managed");
if(isset($_POST["submit"])){
    $user=$_POST['user'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"SELECT * FROM login WHERE name='$user' AND password='$password'");
    if(mysqli_num_rows($query) > 0){
        header('location: user.php');
    }
    else{
        echo "SAI PASSWORD HOAC USER";
    }
}
?>