<?php
require_once './controllers/ControllerMenu.php';
session_start();
//Check if form is submited.
if (isset($_POST['submit'])) {
    //Overriding email and password to variables.
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Creating an instance.
    $data = new ControllerMenu();
    //Calling method validateData() and checking if it returns true and then heading to dashboard, if not then heading to login.
    if ($data->validateData($email, $password) == true) {
        header("Location: dashboard.php");
        
    } else {
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>
        Admin Login
    </h1>
    <form method="POST">
        Email: <input type="text" name="email" id="">
        Password: <input type="password" name="password" id="">
        <button name="submit" type="submit">submit</button>
    </form>

</body>
</html>