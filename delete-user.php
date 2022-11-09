<?php
require_once './controllers/ControllerMenu.php';
session_start();
//Check if SESSION = 1. Only admin has role number 1 and he's the only one who can be accessed there.
if ($_SESSION['Roli'] != 1) {
    header("Location: login.php");
    die();
  }
//Creating an instance.
$cMenu = new ControllerMenu;
//Check if ID is fetched to url and then override to productID variable.
if (isset($_GET['id'])) {
    $productID = $_GET['id'];
}
//Calling delete() method and sending productID as a prop.
$cMenu->delete($productID);