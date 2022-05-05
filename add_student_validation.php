<?php

    $flag1 = 0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['btnSubmit'])){
            $conn = mysqli_connect("localhost","root","","myLibrary") or die(mysqli_error());

            $sql = "INSERT INTO tbl_addStudent (eno,sname,sclass,sdob,semail,smobile,saddress,susername,spassword) VALUES('". $_POST['seno']."',
            '". $_POST['sname']."',
            '". $_POST['sclass']."',
            '". $_POST['sdate']."',
            '". $_POST['semail']."',
            '". $_POST['smobile']."',
            '". $_POST['saddress']."',
            '". $_POST['susername']."',
            '". $_POST['spassword']."')";

            $rows = $conn->query($sql);

            if($rows==TRUE){
                $flag1 = 1;
                header('Location:'. $_SERVER['HTTP_REFERER'].'?flag1='.$flag1);
                exit();

            }else{
                $flag1 = 0;
                header('Location:'. $_SERVER['HTTP_REFERER'].'?flag1='.$flag1);
                exit();
            }
           

        }
    }

?>