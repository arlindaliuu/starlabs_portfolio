<?php
require_once './controllers/ControllerMenu.php';
session_start();

if ($_SESSION['Roli'] != 1) {
  header("Location: login.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <h1 class="userh1">User</h1>
    <table>
    <?php
                $controller = new ControllerMenu;
                $allData = $controller->getUser();
               foreach($allData as $data) : ?>
        <tr class="tableheader">
          <th>Emri</th>
          <th>Mbiemri</th>
          <th>Email</th>
          <th>Mosha</th>
          <th>Bio</th>
          <th>Roli</th>
          <th>Rrethmeje</th>
          <th></th>
        </tr>
        <tr class="tableheader">
          <td><?php echo $data['Emri'] ?></td>
          <td><?php echo $data['Mbiemri'] ?></td>
          <td><?php echo $data['Email'] ?></td>
          <td><?php echo $data['Mosha'] ?></td>
          <td><?php echo $data['Bio'] ?></td>
          <td><?php echo $data['Roli'] ?></td>
          <td><?php echo $data['RethMeje'] ?></td>
          <td>
            <button id="editbutton"><a href="edit-product.php?id=<?php echo $data['ID']; ?>">Edit</a></button>
            <button id="deletebutton"><a href="delete-user.php?id=<?php echo $data['ID']; ?>">Delete</a></button>
        </td>
          
          
        </tr>
<?php endforeach ?>
      </table>
</body>
</html>