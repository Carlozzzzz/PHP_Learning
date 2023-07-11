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
        $profileAbout = "Tell me about your daily life! Your fantacies and hobbies.";
        $profileTitle = "Hi! I am " . $this->userUid;
        $profileText = "Welcome to potato profile, Soon I will be sa developer that can earn more money.";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        
        // echo "<pre>";
        // var_dump($about);
        // var_dump($introTitle);
        // var_dump($introText);
        // die();
        // Error handlers
        if($this->emptyInputCheck($about, $introTitle, $introText) == true) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        // Update profile info
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
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