
<?php
require_once './controllers/ControllerMenu.php';

$menu = new ControllerMenu;
$currentUser = $menu->editUser($_GET['id']);

if (isset($_POST['submit'])) {
    $menu->update($_POST, $_GET['id']);
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