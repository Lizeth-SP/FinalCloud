<?php

    //session_start();

    $serverName = "servercomputo.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "bdComputo", // update me
        "Uid" => "usr", // update me
        "PWD" => "UsuarioLizeth1!" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn === false){
        die(print_r(sqlsrv_errors(), true));
    }
?>
