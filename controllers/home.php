<?php

class Admin_Home_Controller extends Admin_Base_Controller {

    public function get_index(){

    	$this->layout->title = 'Dashboard';
    	$this->layout->nest('content', 'admin::dashboard.index');

    }

}