<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit_member"])) {
        // Get form data
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $panchayat = $_POST["panchayat"];
        $ward = $_POST["ward"];
        $occupation = $_POST["occupation"];

        // Check if the checkbox is checked
        $be_member = isset($_POST["be_member"]) ? 1 : 0;

        // Insert data into 'volunt' table
        $sql = "INSERT INTO volunt (name, mobile, email, dob, country, state, district, panchayat, ward, occupation, be_member)
                VALUES ('$name', '$mobile', '$email', '$dob', '$country', '$state', '$district', '$panchayat', '$ward', '$occupation', '$be_member')";

        if ($conn->query($sql) === TRUE) {
            // Success
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
        input[type="tel"],
        input[type="file"],
        .btn {
            margin-bottom: 10px;
        }

        .bottom-box {
            clear: both;
        }
    </style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <div style="padding: 20px;">
        <h2><b>Form</b></h2>
        <hr> <!-- Horizontal line -->
    </div>
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
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" id="dob" name="dob" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" id="country" name="country" class="form-control">
            </div>
            <div class="mb-3">
                <label for="district" class="form-label">District:</label>
                <input type="text" id="district" name="district" class="form-control">
            </div>
            <div class="mb-3">
                <label for="ward" class="form-label">Ward:</label>
                <input type="text" id="ward" name="ward" class="form-control">
            </div>
            <div class="mb-3">
                <label for="taluk" class="form-label">Taluk:</label>
                <input type="text" id="taluk" name="taluk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="panchayat" class="form-label">Panchayat / Municipality:</label>
                <input type="text" id="panchayat" name="panchayat" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3 bottom-box">
        <label for="occupation" class="form-label">Occupation:</label>
        <textarea id="occupation" name="occupation" class="form-control"></textarea>
    </div>
    
    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">
        Submit
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Do you want to be a member?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="be_member" name="be_member">
                        <label class="form-check-label" for="be_member">
                            Be a Volunteer for a change
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit_member" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
