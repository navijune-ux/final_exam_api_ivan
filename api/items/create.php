<?php

include "db.php";

$name = $_REQUEST['name'] ?? '';
$description = $_REQUEST['description'] ?? '';
$price = $_REQUEST['price'] ?? '';

if($name != ''){

    $sql = "INSERT INTO items(name,description,price)
    VALUES('$name','$description','$price')";

    if($conn->query($sql)){
        echo "Item Added";
    }

}else{
    echo "No data";
}

?>