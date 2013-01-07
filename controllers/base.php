<?php
class Admin_Base_Controller extends Controller {

    public $restful = true;
    public $layout = 'admin::layouts.main';

    public function __construct(){

        parent::__construct();

        Config::set('auth.driver', 'adminauth');

        Asset::container('header')->bundle('admin');
        Asset::container('header')->add('bootstrap', 'css/bootstrap.min.css');

        Asset::container('footer')->bundle('admin');
        Asset::container('footer')->add('jquery', 'http://code.jquery.com/jquery-latest.min.js');
        Asset::container('footer')->add('bootstrapjs', 'js/bootstrap.min.js');

        $this->filter('before', 'auth');

    }

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string    $method
     * @param  array     $parameters
     * @return Response
     */
    public function __call($method, $parameters){
        return Response::error('404');
    }

}