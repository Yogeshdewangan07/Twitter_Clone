<?php
session_start();
include "config.php";

if(isset($_SESSION['unique_id']) && isset($_POST['postid'])){
    $post_id = $_POST['postid'];
    $sql = mysqli_query($conn, "delete from tweets where post_id = $post_id");
    if($sql){
        echo "success";
    }else{
        echo "error";
    }
}
?>