<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <?php include 'Resources/includes.php'; ?>
    </head>
<body>
    <?php include'Pages/navbar.php';?>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $email=$_POST['email'];
            $pw=$_POST['pw'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,}$/", $pw)) {
                $passwordErr = "Password must be at least 8 characters long, include an uppercase letter, lowercase letter, and a symbol.";
            }

        }
    ?>
    <div class="container">
        <form action="index.php" method="POST">
            <?php include'Pages/loginform.php';?>
        </form>
    </div>
</body>
</html>