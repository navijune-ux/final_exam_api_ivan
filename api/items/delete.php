<?php

include "../../db.php";

$id = $_REQUEST['id'] ?? '';

if($id != ''){

    $sql = "DELETE FROM items WHERE id='$id'";

    if($conn->query($sql)){
        echo "Deleted";
    }

}else{
    echo "No data";
}

?>