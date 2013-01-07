<?php
    
use Laravel\CLI\Command as Command;
use Admin\Models\Admin as Admin;

class Admin_Setup_Task {

    public function run($arguments){

        if(empty($arguments) || count($arguments) < 5){
            die("Error: Please enter first name, last name, username, email address and password\n");
        }

        Command::run(array('bundle:publish', 'admin'));

        $role = (!isset($arguments[5])) ? 'admin' : $arguments[5];

        $data = array(
            'name' => $arguments[0].' '.$arguments[1],
            'username' => $arguments[2],
            'email' => $arguments[3],
            'password' => Hash::make($arguments[4]),
            'role' => $role,
        );

        $user = Admin::create($data);

        echo ($user) ? 'Admin created successfully!' : 'Error creating admin!';

    }

}