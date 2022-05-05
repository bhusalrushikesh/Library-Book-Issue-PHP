<html>
    <head>
        <title>Login Page for Library Book issue System</title>
    </head>
    <body bgcolor="#FFFFE0">
        <center><h2>Library Book-Issue System</h2></center>
        <center><h2><u>Login</u></h2></center>
        <form action="login_validation.php" method="POST">
            <table border="1" align="center" cellpadding="5" cellspacing="5">
    
                <tr>
                    <td> USERNAME :</td>
                    <td> <input type="text" name="username" size="48"> </td>
                    </tr>
                    <tr>
                    <td> PASSWORD :</td>
                    <td> <input type="password" name="password" size="48"> </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                        <input type="submit" name="btnSubmit" value="submit">
                        </td>
                        </tr>

            </table>
        </form>
        
    </body>
</html>

<?php 

echo "this is php";

?>