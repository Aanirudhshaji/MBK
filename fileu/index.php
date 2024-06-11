<?php
include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Raise a Complaint</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ensures the form is centered vertically */
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 90%;
            margin-top: 50px;
            height: auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea, input[type="tel"], input[type="file"], .btn {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <div style="padding: 20px;">
        <center><h2><b>Raise a Complaint</b></h2></center>
        <hr> <!-- Horizontal line -->
    </div>
    <form action="process_form.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State:</label>
                <input type="text" id="state" name="state" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="district" class="form-label">District:</label>
                <input type="text" id="district" name="district" class="form-control">
            </div>
            <div class="mb-3">
                <label for="taluk" class="form-label">Taluk:</label>
                <input type="text" id="taluk" name="taluk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="ward" class="form-label">Ward:</label>
                <input type="text" id="ward" name="ward" class="form-control">
            </div>
            <div class="mb-3">
                <label for="panchayat" class="form-label">Panchayat:</label>
                <input type="text" id="panchayat" name="panchayat" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="complaint" class="form-label">Complaint:</label>
        <textarea id="complaint" name="complaint" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Select file:</label>
        <input type="file" class="form-control" name="file" id="file">
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-success">Register</button>
        <button type="button" class="btn btn-danger">Cancel</button>
    </div>
</form>



</body>
</html>
