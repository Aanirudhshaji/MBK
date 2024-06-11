<?php
include("connect.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a unique code
    

    // Get form data
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $complaint = $_POST["complaint"];
    $state = $_POST["state"];
    $district = $_POST["district"];
    $taluk = $_POST["taluk"];
    $panchayat = $_POST["panchayat"];
    $ward = $_POST["ward"];
    $email = $_POST["email"];

    // Insert data into database with unique code
   
    $sql = "INSERT INTO comp ( name, mobile, complaint, state, district, taluk, panchayat, ward, email)
            VALUES ( '$name', '$mobile', '$complaint', '$state', '$district', '$taluk', '$panchayat', '$ward', '$email')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/"; // Change this to the desired directory for uploaded files
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is allowed (you can modify this to allow specific file types)
        $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");
        if (!in_array($file_type, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
        } else {
            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                // File upload success, now store information in the database
                $filename = $_FILES["file"]["name"];
                $filesize = $_FILES["file"]["size"];
                $filetype = $_FILES["file"]["type"];

                // Database connection
                $db_host = "localhost";
                $db_user = "root";
                $db_pass = "";
                $db_name = "mkwu";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Insert the file information into the database
                $sql = "INSERT INTO files (filename, filesize, filetype) VALUES ('$filename', $filesize, '$filetype')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded and the information has been stored in the database.";
                } else {
                    echo "Sorry, there was an error uploading your file and storing information in the database: " . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>

