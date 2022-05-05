<html>
    <head>
        <title>Login Page for Library Book issue System</title>
    </head>
    <body bgcolor="#FFB6C1">
        <center><h1>Library Book-Issue System</h1></center>
        <center><h2>Student Book Issue</h2></center>
</br>


    
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <center><h4><b><u>Search Book</b></u></h4></center>
            <table border="1" align="center" cellpadding="5" cellspacing="5">
    
                    <tr>
                    <td>Enter the title of the book to be searched :</td>
                    <td> <input type="text" name="search" size="48"> </td>
                    </tr>
                    <tr>
                    
                    <td></td>
                    <td> <input type="submit" value="submit"> <input type="reset" value="Reset"></td>
                    </tr>

                    

            </table>
        </form>
        <?php 


                    $search = $_REQUEST["search"];
               
                    $conn = mysqli_connect("localhost","root","","myLibrary") or die(mysqli_error());

                    $sql = "select isbn,btitle,bauthor,bedition,bpublication from tbl_bookInfo where btitle like '%$search%'"; //search with a book name in the table book_info

                    $rows = $conn->query($sql);

                

               if($rows == TRUE)
               {  

        ?>

                <table border="2" align="center" cellpadding="5" cellspacing="5">

                <tr>
                <th> ISBN </th>
                <th> Title </th>
                <th> Author </th>
                <th> Edition </th>
                <th> Publication </th>
                </tr>

                <?php while($row = $rows->fetch_assoc())
                {
                ?>
                <tr>
                <td><?php echo $row["isbn"];?> </td>
                <td><?php echo $row["btitle"];?> </td>
                <td><?php echo $row["bauthor"];?> </td>
                <td><?php echo $row["bedition"];?> </td>
                <td><?php echo $row["bpublication"];?> </td>
                </tr>
                <?php
                }
            }
            else
            echo "No Reord Found";
               ?>
                </table>


                <center><h2><u>Update Issued Book and Student Info </u></h2></center>
        <form action="student_bookissue_validation.php" method="POST">
            <table border="1" align="center" cellpadding="5" cellspacing="5">
    

            <tr>
                    <td> STUDENT E.NO :</td>
                    <td> <input type="number" name="eno" size="48"> </td>
                    </tr>
                    <tr>
                    <td> STUDENT NAME :</td>
                    <td> <input type="text" name="sname" size="48"> </td>
                    </tr>

                    <tr>
                    <td> ISBN NO :</td>
                    <td> <input type="number" name="isbn" size="48"> </td>
                    </tr>
                    <tr>
                    <td> BOOK TITLE :</td>
                    <td> <input type="text" name="btitle" size="48"> </td>
                    </tr>

                    
                    <tr>
                    <td> PUBLICATION NAME :</td>
                    <td> <input type="text" name="bpublication" size="48"> </td>
                    </tr>

                    <tr>
                    <td> BOOK ISSUE DATE :</td>
                    <td> <input type="date" name="bissuedate" size="48"> </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                        <input type="submit" name="btnSubmit123" value="submit">
                        <a href="http://localhost/PHPP/PHP_MP/admin.php">Back to Admin Panel,use this Link</a>
                       
                        </td>
                        </tr>

            </table>
        </form>

        <center>
        <?php
        if(isset($_GET['flag1'])){
            if($_GET['flag1'] == 1){
                echo "<span style='color:green;'>
                Book Issue Info Added Successfully...!
                </span>";
            }else{

                echo "<span style='color:red;'>
                Not Inserted Please try again...!
                </span>";
            }
        }
        ?>
        </center>

        
    </body>
</html>

