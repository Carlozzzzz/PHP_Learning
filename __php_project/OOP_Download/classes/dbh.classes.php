<?php

class Dbh {
    // Properties
    protected function connect() {
        try {
            $username = "4328101_ooplogin";
            $password = "root1234.";
            $dbh = new PDO('mysql:host=fdb1029.awardspace.net;dbname=4328101_ooplogin', $username, $password);
            return $dbh;
        } catch (PDEException $e){
            // throw $e
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }

}