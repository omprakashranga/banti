<?php

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";
 
 $conn = new mysqli($server, $username, $password, $dbname);
 
 $sql = 'INSERT INTO students(name, phone, email, image_phat,)';
 if($conn->query($sql)){
     echo 'Conected succsefull ';
 }else{
     echo 'Not conected';
 };



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $image = $_POST['formFile'];

    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
    print_r($_POST);
    $name_pattern = '/^[a-zA-Z-]+\s*[a-zA-Z-]/';
    $phone_pattern = '/^[0-9]{10}$/';
    $email_pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    $isNameValid = preg_match($name_pattern, $name);
    $isPhoneValid = preg_match($phone_pattern, $phone);
    $isEmailValid = preg_match($email_pattern, $email);


    if (!$isNameValid) {
        echo 'please enter a valid name';
    }
    if (!$isPhoneValid) {
        echo 'please enter a valid phone';
    }
    if (!$isEmailValid) {
        echo 'please enter a valid email';
    }
}

if ($isNameValid && $isPhoneValid && $isEmailValid) {

    if (isset($_FILES['formFile'])) {
        $_file_tmp = $_FILES['formFile']['tmp_name'];
        move_uploaded_file($_file_tmp, "uplodas/");
    }
}
