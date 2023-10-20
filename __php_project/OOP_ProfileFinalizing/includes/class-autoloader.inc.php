<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
  
    if(strpos($url, 'includes') !== false) { // strpos, check the presence of specific string
        $path = '../classes/';
    }
    else {
        $path = 'classes/';
    }

    $extension = '.classes.php';    
    
    $classFile = $path . $className . $extension;
   
    // Check if the class file exists
    if (file_exists($classFile)) {
        include_once $classFile;
    } else {
        // For LoginContr, check if the class exists in the "controller" folder
        $myPath = "";
        $controllerFile = $path . 'controller/' . $className . $extension;
        $modelFile = $path . 'model/' . $className . $extension;
        $viewFile = $path . 'view/' . $className . $extension;

        if (file_exists($controllerFile)) {
            $myPath = $controllerFile;
            include_once $myPath;
        } 
        elseif(file_exists($modelFile)) {
            $myPath = $modelFile;
            include_once $myPath;
        }
        elseif(file_exists($viewFile)) {
            $myPath = $viewFile;
            include_once $myPath;
        }
        else
        {
            echo 'Class file not found: ' . $myPath;
        }
            
        // echo "<pre>";
        // echo $controllerFile . '<br>';
        // echo $modelFile. '<br>';
        // echo $viewFile;
        // die();
   
    }

    
}