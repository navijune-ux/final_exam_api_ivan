<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "crud_api"
);

if($conn->connect_error){
    die("Connection Failed");
}

?>