<?php
use App\Utilities\Router\Router;


Router::match('GET','/project/users/index','UserController@index');
Router::match('GET', '/project/users/admin', 'UserController@admin');
Router::match('GET', '/project/login', 'Views@login_page');

?>