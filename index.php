<?php
session_start();
include './config/connection.php';
include './models/functions.php';

$pdo = connect_mysql();

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php').'.php' ? $_GET['page'] : 'home';
include './templates/'.$page.'.php'; 


?>
