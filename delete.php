<?php

include "db.php";

$id = $_POST['id'];

$sql = "DELETE FROM items WHERE id='$id'";

if($conn->query($sql)){
    echo "Deleted";
}

?>