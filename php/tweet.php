<?php
session_start();
include_once "config.php";

$status = mysqli_real_escape_string($conn, $_POST['status']);
$file = $_FILES['file'];
$unique_id = $_SESSION['unique_id'];


if (!empty($status) && !empty($file)) {
    if (strpos($file['type'], 'image/') === 0) {
        if (isset($file['name'])) { // Check if file is uploaded
            $img_name = $file['name']; // Getting user uploaded image name
            $tmp_name = $file['tmp_name']; // This temporary name is used to save/move the file in our folder

            if (move_uploaded_file($tmp_name, "images/{$img_name}")) {
                $insert_query = mysqli_query($conn, "INSERT INTO tweets (status, image, unique_id, created_at) VALUES ('$status', '$img_name', '$unique_id', CURRENT_TIMESTAMP)");
                echo "success";
            } else {
                echo "Error moving image file.";
            }
        }
    } else  {
        if (isset($file['name'])) { // Check if file is uploaded
            $vid_name = $file['name']; // Getting user uploaded video name
            $tmp_name = $file['tmp_name']; // This temporary name is used to save/move the file in our folder

            if (move_uploaded_file($tmp_name, "images/{$vid_name}")) {
                $insert_query = mysqli_query($conn, "INSERT INTO tweets (status, video, unique_id) VALUES ('$status', '$vid_name', '$unique_id')");
                echo "success";
            } else {
                echo "Error moving video file.";
            }
        }
    }
}
else if (empty($status) && !empty($file)) {
    if (strpos($file['type'], 'image/') === 0) {
        if (isset($file['name'])) { // Check if file is uploaded
            $img_name = $file['name']; // Getting user uploaded image name
            $tmp_name = $file['tmp_name']; // This temporary name is used to save/move the file in our folder

            if (move_uploaded_file($tmp_name, "images/{$img_name}")) {
                $insert_query = mysqli_query($conn, "INSERT INTO tweets (image, unique_id) VALUES ('$img_name', '$unique_id')");
                echo "success";
            } else {
                echo "Error moving image file.";
            }
        }
    } else if (strpos($file['type'], 'video/') === 0) {
        if (isset($file['name'])) { // Check if file is uploaded
            $vid_name = $file['name']; // Getting user uploaded video name
            $tmp_name = $file['tmp_name']; // This temporary name is used to save/move the file in our folder

            if (move_uploaded_file($tmp_name, "images/{$vid_name}")) {
                $insert_query = mysqli_query($conn, "INSERT INTO tweets (video, unique_id) VALUES ('$vid_name', '$unique_id')");
                echo "success";
            } else {
                echo "Error moving video file.";
            }
        }
    }
    
}
else if (!empty($status) && empty($file)) {
    $sql = mysqli_query($conn, "INSERT INTO tweets (status, unique_id) VALUES ('$status', '$unique_id')");
    if($sql){
        echo "success";
    }else{
        echo "error";
    }
} 
else {
    echo "error";
}
?>
