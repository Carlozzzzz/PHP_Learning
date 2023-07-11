<?php

class LoginContr extends Login{
    // Properties
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    /**
     * Error handler
     * should be done inside this controller
     */

    public function loginUser() {
        
        if($this->emptyInput() == false) {
            // echo "Empty input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        
        $this->getUser($this->uid, $this->pwd);

    }

    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd)) {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

}