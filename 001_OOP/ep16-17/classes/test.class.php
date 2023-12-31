<?php

class Test extends Dbh{

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        
        while($row = $stmt->fetch()) {
            echo $row['users_firstname'] . '<br>';
        }

    }

    public function getUsersStmt($firstname, $lastname) {
        $sql = "SELECT * FROM users where users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();
        // $names = $stmt->fetch();

        foreach ($names as $name) {
            echo $name['users_dateofbirth'] . '<br>';
        }

    }

    public function setUsersStmt($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);
    }
}