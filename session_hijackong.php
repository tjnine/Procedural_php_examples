<?php 
// http://shiflett.org/articles/session-hijacking
if(!iseet($_COOKIE['session_name'])) {
    session_start();
    $_SESSION['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
//session has started, check the persisted values against the current request
} else {
    session_start();
    if($_SESSION['HTTP_USER_AGENT'] != $_SERVER['HTTP_USER_AGENT']) {
        //FORCE USER TO RE-AUTHENTICATE
    }
}

 ?>