<?php

include "db.php";

$id = $_REQUEST['id'] ?? '';
$name = $_REQUEST['name'] ?? '';
$description = $_REQUEST['description'] ?? '';
$price = $_REQUEST['price'] ?? '';

if($id != ''){

    $sql = "UPDATE items
    SET name='$name',
    description='$description',
    price='$price'
    WHERE id='$id'";

    if($conn->query($sql)){
        echo "Updated";
    }

}else{
    echo "No data";
}

?>