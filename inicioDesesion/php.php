<?php

    $host = "localhost";
    $User = "root";
    $pass = "";

    $db = "inicioseciondb";

    $conexion = mysqli_connect($host, $User , $pass, $db);

    if (!$con) {
     echo "Conexion fallida";
    }