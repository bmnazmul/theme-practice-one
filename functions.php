<?php
/*
*My theme function
*/

//All Default function here
include_once('inc/default.php');

//Theme css and jQuery File calling
include_once('inc/enqueue.php');


// Theme Function
include_once('inc/theme_function.php');

// Menu Register
register_nav_menu('main_menu',__('Main_Menu','smnazmul'));

// Widgets Register
include_once('inc/widgets_register.php');