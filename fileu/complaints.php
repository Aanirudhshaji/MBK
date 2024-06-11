<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Your styles here */
        .total-rows {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            margin-bottom: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }
        .total-rows:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container p-4">
        <h2 class="mb-4"><b>Complaint Form Details</b></h2>
        <?php
            // Database connection
            $servername = "localhost";
            $username = "root"; // Your MySQL username
            $password = ""; // Your MySQL password
            $dbname = "mkwu"; // Your MySQL database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from database
            $sql = "SELECT * FROM comp";
            $result = $conn->query($sql);

            // Count the total number of rows
            $totalRows = $result->num_rows;

            // Display the total number of rows
            echo '<div class="total-rows">Total Complaints: ' . $totalRows . '</div>';

            if ($totalRows > 0) {
                echo '<table class="table table-striped">'; // Start the table
                echo '<thead>'; // Table head
                echo '<tr>'; // Table header row
                echo '<th>Name</th>';
                echo '<th>Mobile Number</th>';
                echo '<th>Email</th>';
                echo '<th>State</th>';
                echo '<th>District</th>';
                echo '<th>Taluk</th>';
                echo '<th>Ward</th>';
                echo '<th>Panchayat</th>';
                echo '<th>Complaint</th>';
                echo '<th>File</th>';
                echo '</tr>';
                echo '</thead>'; // End of table head
                echo '<tbody>'; // Table body

                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<tr>'; // Table row
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['mobile'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['state'] . '</td>';
                    echo '<td>' . $row['district'] . '</td>';
                    echo '<td>' . $row['taluk'] . '</td>';
                    echo '<td>' . $row['ward'] . '</td>';
                    echo '<td>' . $row['panchayat'] . '</td>';
                    echo '<td>' . $row['complaint'] . '</td>';
                    echo '<td><a href="uploads/' . $row['file_name'] . '" class="file-link">Download File</a></td>';
                    echo '</tr>'; // End of table row
                }

                echo '</tbody>'; // End of table body
                echo '</table>'; // End of table
            } else {
                echo "No records found";
            }
            $conn->close();
        ?>
    </div>
</body>
</html>