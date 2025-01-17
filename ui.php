<?php

require_once 'crud.php';

class UI {

    private $crud;

    public function __construct() {
        $this->crud = new Crud();
    }

    public function displayTable() {


        $users = $this->crud->read();

        echo "<table border='1' cellpadding='10'>";

        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>";
        
        foreach ($users as $user) {
            echo "<tr>
                    <td>{$user['id']}</td>
                    <td>{$user['name']}</td>
                    <td>{$user['email']}</td>
                    <td>
                        <a href='index.php?edit={$user['id']}'>Edit</a> | 
                        <a href='index.php?delete={$user['id']}'>Delete</a>
                    </td>
                  </tr>";
        }
        echo "</table>";
    }


}
?>
