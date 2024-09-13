<?php
    session_start();
    if ($_SESSION['sesion']){
        echo 'Сессия запущена успешно';
    }else
    if(session_destroy()) {
        header("location: /autoreg.html");
    };
    error_reporting(0);

    $msg = "";
    
    // If upload button is clicked ...
    if (isset($_POST['upload'])) {
    
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./admin_image/" . $filename;
        $name =$_POST["name"];
        $gender =$_POST["gender"];
        $price =$_POST["price"];
    
        $db = mysqli_connect("localhost", "root", "", "test1");
    
        // Get all the submitted data from the form
        $sql = "INSERT INTO tests3 (filename,name,gender,price) VALUES ('$filename','$name','$gender','$price')";
    
        // Execute query
        mysqli_query($db, $sql);
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>&nbsp; Image uploaded successfully!</h3>";
        } else {
            echo "<h3>&nbsp; Failed to upload image!</h3>";
        }
        header("location: ./add_li.php");
    }
    
?>