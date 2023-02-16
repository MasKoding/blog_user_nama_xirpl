<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password = 'root';
    $dbName = 'blog';
    // jangan di ikutin ya ini untuk mampp bukan xampp !!
    $socket = '/Applications/MAMP/tmp/mysql/mysql.sock';
    $port = '3306';

   
    $connect = new mysqli($serverName,$userName,$password,$dbName,$port,$socket);
    
    if($connect->connect_error){
        die('Error :'.$connect->error);
    }


?>