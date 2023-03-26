<?php
require 'credential.php';
function connect_mysql(){
    $host ='sql309.epizy.com';
    $db='epiz_33877470_gizmo';
    $user=USERNAME;
    $pass=PASSWORD;
    


$dsn="mysql:dbname=$db;host=$host;";
$options =[
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES =>false,
];
try{
    
    return new PDO($dsn,$user,$pass,$options);
    
}
catch(PDOException $exception){
    echo 'failed to connect';
    throw new PDOException($exception->getMessage(),(int)$exception->getCode()); 
}
}
?>