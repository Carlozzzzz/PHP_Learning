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
        // $xresult['bool'] = true;
        
        if($xresult['bool'] == true){
            $xretobj['bool'] = true;
            $xretobj['msg'] = "Login Success!";
        } 
        else
        {
            $xretobj['bool'] = false;
            $xretobj['msg'] = $xresult['msg'];
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