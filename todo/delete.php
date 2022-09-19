<?php include("./db_config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "delete from todo_list where id = $id";
        if($conn->query($sql) === true){
            header('location:./index.php');
        } else {
            echo "delete a todo list failed";
        }
    } else {
        die("id does not exists");
    }
?>