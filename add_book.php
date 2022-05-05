<html>
    <head>
        <title>Login Page for Library Book issue System</title>
    </head>
    <body bgcolor="#FFFFE0">
        <center><h2>Library Book-Issue System</h2></center>
        <center><h2><u>Add Book Info</u></h2></center>
        <form action="add_book_validation.php" method="POST">
            <table border="1" align="center" cellpadding="5" cellspacing="5">
    
                    <tr>
                    <td> ISBN NO :</td>
                    <td> <input type="number" name="isbn" size="48"> </td>
                    </tr>
                    <tr>
                    <td> TITLE :</td>
                    <td> <input type="text" name="btitle" size="48"> </td>
                    </tr>

                    
                    <tr>
                    <td> AUTHOR :</td>
                    <td> <input type="text" name="bauthor" size="48"> </td>
                    </tr>

                    <tr>
                    <td> EDITION :</td>
                    <td> <input type="number" name="bedition" size="48"> </td>
                    </tr>

                    <tr>
                    <td> PUBLICATION NAME :</td>
                    <td> <input type="text" name="bpublication" size="48"> </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                        <input type="submit" name="btnSubmit" value="submit">
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
                Book Info Added Successfully...!
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

