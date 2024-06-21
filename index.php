<!-- index.php -->

   <?php
   session_start(["use_strict_mode" => true]);
   //include("header.php");
   $page = isset($_GET['page']) ? $_GET['page'] : 'default';
   switch ($page) {
       case 'regist':
           require('regist.html');
           break;
       case 'auth':
           require('authform.php');
           break;
       default:
           require('header.php');
           require('main_content.php');
           require('footer.php');
           break;
   }
   ?>



