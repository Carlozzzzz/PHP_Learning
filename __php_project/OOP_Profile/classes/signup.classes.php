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
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email) {
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
        // getting the profile info
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ?;');

        if(!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed"); // comeback
            exit();
        }
        
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound"); // comeback
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }
}