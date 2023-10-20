<?php
/**
 * Model
 * always start here
 * 
 * responsible for database related stuffs
 */

class ProfileInfo extends Dbh{

    protected function getProfileInfo($userId) {
        // getting the profile info
        $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

        if(!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }
        
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId ) {
        // getting the profile info
        $stmt = $this->connect()->prepare('UPDATE profiles SET profiles_about = ?, profiles_introtitle = ?, profiles_introtext = ? WHERE users_id = ?;');

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            return false;
        }

        $stmt = null;
        return true;

    }

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId ) {
        $xretobj = array();

        $stmt = $this->connect()->prepare('INSERT INTO profiles (profiles_about, profiles_introtitle, profiles_introtext, users_id) VALUES (?, ?, ?, ?);');

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Statement failed.";
            return  $xretobj;
        }
        
        $stmt = null;
       return true;
    }


} 