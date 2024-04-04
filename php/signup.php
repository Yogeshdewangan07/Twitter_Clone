<?php
    session_start();
    include "config.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // all Input fields are required
    if(!empty($name) && !empty($email) && !empty($password)){
        //check that email already exist in the database or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            // check email is already exist or not
            if(mysqli_num_rows($sql) > 0){ //if email already exist
                echo "$email - This email already exist!";
            }else{
                //check user upload file or not
                if(isset($_FILES['image'])){ //if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting user uploaded img name
                    $img_type = $_FILES['image']['type']; //getting user upload img type
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder
                    
                    // explode image and get the last extension like jpg, png
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode); //here we get the extension of an user uploaded img file
    
                    $extensions = ["jpeg", "png", "jpg"]; //these are some valid img ext and we've store them in array
                    // check image extension
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        // check image file type
                        if(in_array($img_type, $types) === true){
                            $time = time(); //this will return us current time
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $unique_id = rand(time(), 100000000);
                                $encrypt_pass = md5($password); //this will encrypt password
                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, name, email, password, image)
                                VALUES ('{$unique_id}', '{$name}', '{$email}', '{$encrypt_pass}', '{$new_img_name}')");
                                
                                $_SESSION['unique_id'] = $unique_id;
                                echo "success";
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>