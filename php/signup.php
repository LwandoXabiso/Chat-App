<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exists!";
            }else{
                if(isset($_FILES['image'])){
                    $image_name = $_FILES['image']['name'];
                    $image_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $image_explode = explode('.', $image_name);
                    $image_ext = end($image_explode);

                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($image_ext, $extensions) === true){
                        $time = time();

                        $new_image_name = $time.$image_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_image_name)){
                            $status = "Active now";
                            $random_id = rand(time(), 10000000);

                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                        VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_image_name}', '{$status}')");
                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    // session_start();
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "success";
                                }
                                // }else{
                                //     echo "This email address does not exist!";
                                // }
                            }else{
                                echo "Something went wrong. Please try again!";
                            }
                        }else{
                            echo "Please select an image file - jpeg, png, jpg";
                            exit();
                    }
                }else{
                    echo "Please select an image file!";
                }
            }

        }else{
            echo "$email -  This is not a valid email!";
        }

    }else{
        echo "All input field are required!";
    }


?>