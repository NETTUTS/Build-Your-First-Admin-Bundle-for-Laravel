<?php

Route::controller(array(
    'admin::home',
    'admin::login',
));

Route::filter('auth', function(){
	if (Auth::guest()) return Redirect::to(URL::to_action('admin::login'));
});