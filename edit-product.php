<?php
require_once './controllers/ControllerMenu.php';
session_start();
//Creating an instance.
$menu = new ControllerMenu;
//Calling a method editUser() and sending an id.
$currentUser = $menu->editUser($_GET['id']);
//Check if form is submited then call update() method.
if (isset($_POST['submit'])) {
    $menu->update($_POST, $_GET['id']);
}
//Check if SESSION = 1. Only admin has role number 1 and he's the only one who can be accessed there.
if ($_SESSION['Roli'] != 1) {
    header("Location: login.php");
    die();
  }

?>

<form method="POST">

    Id:
    <input type="text" name="id" value="<?php echo $currentUser['ID']; ?>" disabled>
    <br>
    Emri:
    <input type="text" name="emri" value="<?php echo $currentUser['Emri']; ?>">
    <br>
    Mbiemri:
    <input type="text" name="mbiemri" value="<?php echo $currentUser['Mbiemri']; ?>">
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $currentUser['Email']; ?>">
    <br>
    Mosha:
    <input type="number" name="mosha" value="<?php echo $currentUser['Mosha']; ?>">
    <br>
    Bio:
    <input type="text" name="bio" value="<?php echo $currentUser['Bio']; ?>">
    <br>
    Roli:
    <input type="text" name="roli" value="<?php echo $currentUser['Roli']; ?>">
    <br>
    RrethMeje:
    <input type="text" name="rethmeje" value="<?php echo $currentUser['RethMeje']; ?>">
    <br>
    <button name="submit">Submit</button>
</form>