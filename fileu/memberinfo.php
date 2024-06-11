<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member and Volunteer Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        h2 {
            font-weight: bold;
            text-align: center;
            margin-top: 30px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
include("connect.php");

// Retrieve data where be_member = 0
$sql_zero = "SELECT * FROM volunt WHERE be_member = 0";
$result_zero = $conn->query($sql_zero);

// Check if there are any rows returned for be_member = 0
if ($result_zero->num_rows > 0) {
    echo "<h2>Member Information</h2>";
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Country</th>
                <th>State</th>
                <th>District</th>
                <th>Panchayat / Municipality</th>
                <th>Ward</th>
                <th>Occupation</th>
                <th>Be Member</th>
            </tr>";

    // Output data of each row where be_member = 0
    while($row = $result_zero->fetch_assoc()) {
        echo "<tr>
                <td>".$row["name"]."</td>
                <td>".$row["mobile"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["dob"]."</td>
                <td>".$row["country"]."</td>
                <td>".$row["state"]."</td>
                <td>".$row["district"]."</td>
                <td>".$row["panchayat"]."</td>
                <td>".$row["ward"]."</td>
                <td>".$row["occupation"]."</td>
                <td>".$row["be_member"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No Member Information Found</h2>";
}

// Retrieve data where be_member = 1
$sql_one = "SELECT * FROM volunt WHERE be_member = 1";
$result_one = $conn->query($sql_one);

// Check if there are any rows returned for be_member = 1
if ($result_one->num_rows > 0) {
    echo "<h2>Volunteer Information</h2>";
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Country</th>
                <th>State</th>
                <th>District</th>
                <th>Panchayat / Municipality</th>
                <th>Ward</th>
                <th>Occupation</th>
                <th>Be Member</th>
            </tr>";

    // Output data of each row where be_member = 1
    while($row = $result_one->fetch_assoc()) {
        echo "<tr>
                <td>".$row["name"]."</td>
                <td>".$row["mobile"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["dob"]."</td>
                <td>".$row["country"]."</td>
                <td>".$row["state"]."</td>
                <td>".$row["district"]."</td>
                <td>".$row["panchayat"]."</td>
                <td>".$row["ward"]."</td>
                <td>".$row["occupation"]."</td>
                <td>".$row["be_member"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No Volunteer Information Found</h2>";
}

$conn->close();
?>
</body>
</html>