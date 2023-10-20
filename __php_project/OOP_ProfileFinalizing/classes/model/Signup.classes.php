<?php
/**
 * Model Class
 */
class Signup extends Dbh{
    // Properties
    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);');
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            return false;
        }
        $stmt = null;
        return true;
    }

    protected function checkUser($uid, $email) {
        $xretobj = array();

        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? or users_email = ?;');
        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function getUserId($uid) {
        $xretobj = array();
        // getting the profile info
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ?;');

        if(!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed"); // comeback
            exit();
        }
        
        if($stmt->rowCount() == 0) {
            return false;
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }
}