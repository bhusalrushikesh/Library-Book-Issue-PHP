<?php

    $flag1 = 0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['btnSubmit'])){
            $conn = mysqli_connect("localhost","root","","myLibrary") or die(mysqli_error());

            $sql = "INSERT INTO tbl_bookInfo (isbn, btitle, bauthor, bedition, bpublication) VALUES('". $_POST['isbn']."',
            '". $_POST['btitle']."',
            '". $_POST['bauthor']."',
            '". $_POST['bedition']."',
            '". $_POST['bpublication']."')";

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