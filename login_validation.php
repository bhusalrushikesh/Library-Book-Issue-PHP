<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $conn = mysqli_connect("localhost", "root", "", "myLibrary");
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $squery = "SELECT * FROM `tbl_addStudent` WHERE susername='$username' and spassword='$password'";
    
    $rows = $conn->query($squery);
        

    if($_POST['username'] == "Admin" && $_POST['password'] == "admin@123"){
            header('Location: http://localhost//PHPP/PHP_MP/admin.php');
    }elseif($rows==TRUE){
            header("Location: http://localhost//PHPP/PHP_MP/student.php"); 
    }else{
        echo "ERROR";
    }
   
}

?>