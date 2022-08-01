<?php
 defined('BASEPATH') OR exit('no direct access');

 function isLogin()
 {
    if(empty($_SESSION['logged_in']))
         redirect(base_url());
 }

?>
