<?php


require_once 'db.php';


class Crud extends Database {

    public function create($name, $email) {
        $stmt = $this->conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");

        $stmt->bind_param("ss", $name, $email);
        return $stmt->execute();
    }

    public function read() {

        $result = $this->conn->query("SELECT * FROM users");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function update($id, $name, $email) {
        $stmt = $this->conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");

        $stmt->bind_param("ssi", $name, $email, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }


}


// $read_crud =  new Crud();


// echo "<pre>";

// echo "Following in crud class";

// print_r($read_crud->read());

#print_r($read_crud->delete(2));


?>
