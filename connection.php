<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "backend_task";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))

{
    die("failed to connect!");
}


