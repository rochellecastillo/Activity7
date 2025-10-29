<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include'Resources/includes.php';?>
    <link rel="stylesheet" href="Resources/style.css">
</head>
<body>
    <?php include'Pages/navbar.php';?>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $fn=$_POST['fn'];
            $ln=$_POST['ln'];
            $email=$_POST['email'];
            $pw=$_POST['pw'];
            $bdate=$_POST['bdate'];
            $contact=$_POST['contact'];
            if (!preg_match("/^[a-zA-Z ]*$/",$fn)) {
                $fnErr = "Only letters and white space allowed";
            }
            if (!preg_match("/^[a-zA-Z ]*$/",$ln)) {
                $lnErr = "Only letters and white space allowed";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,}$/", $pw)) {
                $passwordErr = "Password must be at least 8 characters long, include an uppercase letter, lowercase letter, and a symbol.";
            }
            $contact = $_POST["contact"];

            if (!preg_match("/^[0-9]{11}$/", $contact)) {
                $contactErr = "Contact number must be exactly 11 digits.";
            }

        }
    ?>
    <div class="container">
        <form action="signup.php" method="POST">
            <?php include'Pages/signupform.php';?>
        </form>
    </div>
</body>
</html>
