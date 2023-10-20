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
        $xretobj = array();
        $xresult = array();

        if($this->emptyInput() == false) {
            // echo "Empty input";
            $xretobj['bool'] = false;
            $xretobj['msg'] = "Empty inputs!";
            return $xretobj;
        }
        
        $xresult = $this->getUser($this->uid, $this->pwd);
        
        if(count($xresult) > 0){
            $xretobj = $xresult;
        } 
        else
        {
            $xretobj['bool'] = false;
            $xretobj['msg'] = "No record found.";
        }

        return $xretobj;
    }

    private function emptyInput() {
        $xresult;
        if(empty($this->uid) || empty($this->pwd)) {
            $xresult = false;
        }
        else
        {
            $xresult = true;
        }
        return $xresult;
    }

}