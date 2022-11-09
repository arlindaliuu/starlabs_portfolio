

<?php
require_once './controllers/ControllerMenu.php';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = new ControllerMenu();

    if ($data->validateData($email, $password) == true) {
        header("Location: index.php");
        
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
    <title>Document</title>
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