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

        User::create([
            'username' => 'alex',
            'email' => 'carlos@gmail.com'
        ]);
    }

   
}