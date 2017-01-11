<?php 
// http://shiflett.org/articles/session-hijacking
session_start();

if (isset($_SESSION['HTTP_USER_AGENT']) && $_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])
    //PROMPT FOR PASSWORD

            $str = $_SERVER['HTTP_USER_AGENT'];
            $str .= 'TIMMY';
            $fingerprint = md5($str);
            $token = md5(uniqid(), true));
            $_SESSION['token'] = $token;

        exit;
} else {
    $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTP_USER_AGENT']);
}

 ?>