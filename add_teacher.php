<html>
    <head>
        <title>Login Page for Library Book issue System</title>
    </head>
    <body bgcolor="#FFFFE0">
        <center><h2>Library Book-Issue System</h2></center>
        <center><h2><u>Add Teacher Info</u></h2></center>
        <form action="add_teachet_validation.php" method="POST">
            <table border="1" align="center" cellpadding="5" cellspacing="5">
    
                    <tr>
                    <td> PRN NO :</td>
                    <td> <input type="text" name="tprnno" size="48"> </td>
                    </tr>
                    <tr>
                    <td> NAME :</td>
                    <td> <input type="text" name="tname" size="48"> </td>
                    </tr>

                    <tr>
                    <td> DEPARTMENT :</td>
                    <td> 
                         <select id="tdepartment" name="tdepartment" >
                        <option value="CO">Computer Enginnering</option>
                        <option value="IF">Information Technology</option>
                        <option value="ME">Mechanical Enginnering</option>
                        </select> 
                    </td>
                    </tr>

                    <td> DATE OF Joining(DOJ) :</td>
                    <td> <input type="date" name="tdate" size="48"> </td>
                    </tr>

                    <td> EMAIL :</td>
                    <td> <input type="email" name="temail" size="48"> </td>
                    </tr>

                    <td> MOBILE NO :</td>
                    <td> <input type="number" name="tmobile" size="48"> </td>
                    </tr>

                    <td> ADDRESS :</td>
                    <td> <textarea id="taddress" name="taddress" rows="4" cols="48">
                                At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
                        </textarea> </td>
                    </tr>

                    <tr>
                    <td> USERNAME :</td>
                    <td> <input type="text" name="tusername" size="48"> </td>
                    </tr>
                    <tr>
                    <td> PASSWORD :</td>
                    <td> <input type="password" name="tpassword" size="48"> </td>
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
                Student Info Added Successfully...!
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

