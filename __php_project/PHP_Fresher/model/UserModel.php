<?php
/**
 * User Model
 */

class UserModel extends Dbh {
    protected function getUser($username, $password) {
        /**
         * Setting up the query
         */

        echo $username;
        echo "<br>";
        echo $password;

        $retobj = array();
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ?;');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        // Check if existing
        if($stmt->rowCount() == 0) {
            $stmt = null;

            $retobj['bool'] = false;
            $retobj['msg'] = "User not found.";
            return $retobj;
        }
        
        // Check if correct credentials
        if(!$stmt->execute(array($username, $hashedPwd))) {
            $stmt = null;
            $retobj['bool'] = false;
            $retobj['msg'] = "Statement failed.";
            return $retobj;
        }

        $retobj['bool'] = true;
        $retobj['msg'] = "Login in success.";
        return $retobj;

    }
}