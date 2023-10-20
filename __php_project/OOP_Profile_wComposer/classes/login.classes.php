<?php
/**
 * Model Class
 */
class Login extends Dbh{
    // Properties
    protected function getUser($uid, $pwd) {
        $retobj = array();
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid, $hashedPwd))) {
            $stmt = null;
            $retobj['bool'] = false;
            $retobj['msg'] = "Statement failed.";
            return $retobj;
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;

            $retobj['bool'] = false;
            $retobj['msg'] = "User not found.";
            return $retobj;
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkedPwd = password_verify($pwd, $pwdHashed[0]['users_pwd']);

        if($checkedPwd == false) {
            $stmt = null;
            $retobj['bool'] = false;
            $retobj['msg'] = "Incorrect password.";
            return $retobj;
        } else if($checkedPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');
            if(!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null;
                $retobj['bool'] = false;
                $retobj['msg'] = "Statement failed.";
                return $retobj;
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                $retobj['bool'] = false;
                $retobj['msg'] = "User not found.";
                return $retobj;
            }
    
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userid'] = $user[0]["users_id"];
            $_SESSION['useruid'] = $user[0]["users_uid"];

        }
        $stmt = null;
        
        $retobj['bool'] = true;
        $retobj['msg'] = "Success";
        return $retobj;
    }
   
    protected function isUserExists() {
        
    }
}