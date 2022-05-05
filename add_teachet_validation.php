<?php

    $flag1 = 0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['btnSubmit'])){
            $conn = mysqli_connect("localhost","root","","myLibrary") or die(mysqli_error());

            $sql = "INSERT INTO tbl_addTeacher (prno,tname,tdepartment,tdoj,temail,tmobile,taddress,tusername,tpassword ) VALUES('". $_POST['tprnno']."',
            '". $_POST['tname']."',
            '". $_POST['tdepartment']."',
            '". $_POST['tdate']."',
            '". $_POST['temail']."',
            '". $_POST['tmobile']."',
            '". $_POST['taddress']."',
            '". $_POST['tusername']."',
            '". $_POST['tpassword']."')";

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