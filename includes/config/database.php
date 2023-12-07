<?php

function conetarDB() : mysqli{
    $db = mysqli_connect('localhost','root', 'root', 'BD_BienesRaices_CRUD');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }
    
    return $db;
}