<?php

require_once 'ui.php';

$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $crud->create($name, $email);

    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $crud->update($id, $name, $email);
    }
}

if (isset($_GET['delete'])) {
    $crud->delete($_GET['delete']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>

    <link rel="stylesheet" href="style.css">


</head>
<body>


            <div id="ff" >
            <h1>PHP CRUD with Classes</h1>
        
  
            <br><br>
        <form method="post">
            <input type="hidden" name="id" value="<?= $_GET['edit'] ?? '' ?>">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" name="<?= isset($_GET['edit']) ? 'update' : 'add' ?>">
                <?= isset($_GET['edit']) ? 'Update' : 'Add' ?>
            </button>
        </form>
        


        <br><br><br><br>
    <?php
    
    $ui = new UI();

    $ui->displayTable(); 
    
    ?>

</div>


</body>
</html>
