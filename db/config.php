<?php

function dbConnect()
{
    $localhost = "localhost";
    $dbusername = "root";
    $dbpassword = "Nayeem4040";
    $dbname = "employe_records";
    $mysqli = new mysqli($localhost, $dbusername, $dbpassword, $dbname);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}

function CloseCon($con)
{
    return $con->close();
}
?>