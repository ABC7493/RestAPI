<?php
// ini_set("display_errors", 1);
require 'core/Core.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

if($url == "/"){
    header( '400 Bad Request' );
    exit( 'Bad Request' );
}else{

    $_REQUEST['controller'] = $url[0];
    $_REQUEST['action'] = $url[1];
    
}

\core\Core::run();

?>