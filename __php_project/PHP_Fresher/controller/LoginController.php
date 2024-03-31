<?php
class LoginController extends UserModel{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser() {
        $xretobj = array();
        $xresult = array();

        if($this->emptyInput() == false) {
            $xretobj['bool'] = false;
            $xretobj['file'] = "controller";
            $xretobj['msg'] = "Empty inputs";
            return $xretobj;
        }

        $xresult = $this->getUser($this->username, $this->password);

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
        $xresult = false;

        if(empty($this->username) || empty($this->password)) {
            $xresult = false;
        }
        else
        {
            $xresult = true;
        }
        return $xresult;
    }
}

