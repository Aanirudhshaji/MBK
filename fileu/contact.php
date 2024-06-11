<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit_member"])) {
        // Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];

        // Insert data into 'member' table
        $sql = "INSERT INTO contact (name, email, subject)
                VALUES ('$name', '$email', '$subject')";

        if ($conn->query($sql) === TRUE) {
            // Insertion successful
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raise a Complaint</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 90%;
            margin: 50px auto;
        }

        h2 {
            font-weight: bold;
            text-align: center;
        }

        hr {
            border-top: 1px solid #ddd;
        }

        .form-label {
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        .btn {
            margin-bottom: 10px;
        }

        .bottom-box {
            clear: both;
        }
    </style>
</head>
<body>
<form action="" method="POST">
    <div style="padding: 20px;">
        <h2><b>contact us</b></h2>
        <hr> <!-- Horizontal line -->
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="mb-3 bottom-box">
        <label for="subject" class="form-label">Subject:</label>
        <textarea id="subject" name="subject" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" name="submit_member" class="btn btn-success">sent</button>
        <button type="submit" name="submit_complaint" class="btn btn-danger">Cancel</button>
    </div>
</form>
</body>
</html>
