<?php
/**
 * Controller - second
 * 
 * handles interaction from the user / user input
 * to make changes, controller tell the model what to do
 */

class ProfileInfoContr extends ProfileInfo{

    private $userId;
    private $userUid;
    
    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }
    
    public function defaultProfileInfo() {
        $xretobj = array();

        $profileAbout = "Tell me about your daily life! Your fantacies and hobbies.";
        $profileTitle = "Hi! I am " . $this->userUid;
        $profileText = "Welcome to potato profile, Soon I will be sa developer that can earn more money.";
        $result = $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
        if($result == true) {
            $xretobj['bool'] = true;
            $xretobj['msg'] = "Profile settings successfully updated.";
        }
        else
        {
            $xretobj = $result;
        }
        return $xretobj;
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        $xretobj = array();
        // echo "<pre>";
        // var_dump($about);
        // var_dump($introTitle);
        // var_dump($introText);
        // die();

        // Error handlers
        if($this->emptyInputCheck($about, $introTitle, $introText) == true) {
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Empty inputs.";
            return $xretobj;
        }

        // Update profile info
        $result = $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);

        if($result == false) {
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Error on updating data.";
            return $xretobj;
        }

        $xretobj['bool'] = true;
        $xretobj['msg'] = "Profile settings successfully updated.";
        return $xretobj;

    }

    public function emptyInputCheck($about, $introTitle, $introText) {
        $result;
        if(empty($about) || empty($introTitle) || empty($introText)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

}