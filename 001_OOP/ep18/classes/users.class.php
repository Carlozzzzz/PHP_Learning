<?php
/**
 * This is the model
 * Only interact with the database
 */
class Users extends Dbh{

    /**
     * get the single user from db
     * wont allow index page use this
     */
    protected function getUser($name){ 
        $sql = "SELECT * FROM users where users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstname, $lastname, $dob){ 
        $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);
    }
}