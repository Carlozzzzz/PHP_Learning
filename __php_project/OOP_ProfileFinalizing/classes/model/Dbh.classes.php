<?php

class Dbh {
    // Properties
    protected function connect() {
        try {
            $username = "root";
            $password = "root";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        } catch (PDEException $e){
            // throw $e
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }

    // online
    protected function connect1() {
        try {
            $username = "4358001_ooplogin";
            $password = "4358001_ooplogin";
            $dbh = new PDO('mysql:host=fdb1028.awardspace.net;dbname=4358001_ooplogin', $username, $password);
            return $dbh;
        } catch (PDEException $e){
            // throw $e
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
    }

}