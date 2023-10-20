<?php

class SignupContr extends Signup{
    // Properties
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    /**
     * Error handler
     * should be done inside this controller
     */

    public function signupUser() {
        /**
         * return will be json_ecode
         */
        $xretobj = array();
        
        if($this->emptyInput() == false) {
            // echo "Empty input";
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Empty inputs.";
            return $xretobj;
        }
        if($this->invalidUid() == false) {
            // echo "Invalid username";
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Invalid username.";
            return $xretobj;
        }
        if($this->invalidEmail() == false) {
            // echo "Invalid email";
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Invalid email.";
            return $xretobj;
        }
        if($this->pwdMatch() == false) {
            // echo "Password don't match!";
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Password not match.";
            return $xretobj;
        }
        if($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Username || Email taken.";
            return $xretobj;
        }

        $results = $this->setUser($this->uid, $this->pwd, $this->email);
        
        // $results = true; // dubugging
        
        if($results == false) {
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Error creating account.";
            return $xretobj;
        }
        $xretobj['bool'] = true;
        $xretobj['msg'] = "User account successfully created.";
        return $xretobj;

    }

    /**
     * Validations for user inputs
     */
    private function emptyInput() {
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;

        if($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result;
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    public function fetchUid($uid) {
        $result = $this->getUserId($uid);
        if($result !== false) {
            return $result[0]['users_id'];
        }
        return false;
    }
}