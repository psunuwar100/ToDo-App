<?php 
    $conn= new mysqli("localhost:3307", "root", "", "todo_table");
    if($conn->connect_error){
        die($conn->connect_error);
    }

?>