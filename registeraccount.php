<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="RegisterInterface">
                <header>Create an Account</header>
                <form action="#" method="POST">
                    <div class="usernameLabel">
                        <label for="username">Username</label>
                    </div>
                    <div class="usernameTextfield">
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>
                    <div class="emailLabel">
                        <label for="email">Email</label>
                    </div>
                    <div class="emailTextfield">
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="passwordLabel">
                        <label for="password">Password</label>
                    </div>
                    <div class="passwordTextfield">
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="phoneLabel">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="phoneTextfield">
                        <input type="number" name="phone" id="phone" required>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" class="btn" name="submit" value="Register" required>
                    </div> 
                    <div class="links">
                        <p> Already have an account? <a href="loginpage.php"> Sign In! </a></p>
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
                        $resUsername = $con -> query($sqlUsername);

      }

        $resUsername = $con -> query($sqlUsername);

            if ($resUsername->num_rows>0) {
                Print '<script>alert("Account is already registered! Please login instead.")</script>';
            } else {
                $sqlInsert = "INSERT INTO `tbl_user` (`username`,`email`,`password`,`phone`)
                    VALUES ('".$un."','".$em."','".$pw."','".$ph."')";

                if ($con->query($sqlInsert) == TRUE) {
                    Print '<script>alert("Account registered successfully!")</script>';
                    Print '<script>window.location.assign("loginpage.php")</script>';
            }
        }
    }

?>

