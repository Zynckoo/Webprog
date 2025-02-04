<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="LoginInterface">
                <header>Login</header>
                <form action="index.php" method="POST">
                    <div class="usernameLabel">
                        <label for="username">Username</label>
                    </div>
                    <div class="usernameTextfield">
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="passwordLabel">
                        <label for="password">Password</label>
                    </div>
                    <div class="passwordTextfield">
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div> 
                    <div class="links">
                        <p> Don't have an account? <a href="registeraccount.php"> Sign Up Account! </a></p>
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>

<?php
    include("connectionexam.php");

    if (isset($_POST['submit'])) {
        $un = $_POST['username'];
        $em = $_POST['email'];
        $pw = $_POST['password'];
        $ph = $_POST['phone'];

        if ($pw != $pw) {
            Print '<script>alert("Passwords do not match!")</script>';
        } else {
            $sqlUsername = "SELECT * FROM `tbl_user`
                        WHERE `Username` = '".$un."'";


      }

        $resUsername = $con -> query($sqlUsername);

        

            
        }
    
                     
?>