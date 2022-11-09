
<?php
require_once './controllers/ControllerMenu.php';
$cMenu = new ControllerMenu;

if (isset($_GET['id'])) {
    $productID = $_GET['id'];
}
$cMenu->delete($productID);