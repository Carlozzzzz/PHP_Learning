<?php

class Home extends Controller
{

    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;
        
        /**
         * Directory path
         */
        $this->view('home/index', ['name' => $user->name]);
    }

    public function test()
    {
        echo 'test';
    }
}