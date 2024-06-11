<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Data</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
</style>
</head>
<body>
<h2 class="heading"><b>Login Information</b></h2>

<table>
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody id="loginData">
        <?php
        include("connect.php");


        $sql = "SELECT email, password FROM loginn";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $count . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "</tr>";
                $count++;
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </tbody>
</table>

<script>
    // Add click event listener to each row to alert the data
    var rows = document.querySelectorAll("#loginData tr");
    rows.forEach(function(row) {
        row.addEventListener("click", function() {
            var email = this.cells[1].textContent;
            var password = this.cells[2].textContent;
            alert("Email: " + email + "\nPassword: " + password);
        });
    });
</script>


<?php
include("connect.php");

// Query to retrieve data from the 'complaint' table
$sql_complaint = "SELECT * FROM complaint";
$result_complaint = $conn->query($sql_complaint);

// Check if there are any results in the 'complaint' table
if ($result_complaint->num_rows > 0) {
    echo "<h2>Complaints</h2>";
    echo "<table id='complaintTable'>";
    echo "<thead><tr><th>Sl No</th><th>Name</th><th>Mobile</th><th>Complaint</th><th>State</th><th>District</th><th>Taluk</th><th>Panchayat</th><th>Ward</th><th>Email</th></tr></thead>";
    echo "<tbody>";
    $serial_no = 1; // Initialize serial number counter
    // Output data of each row from the 'complaint' table
    while ($row_complaint = $result_complaint->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $serial_no . "</td>"; // Output serial number
        echo "<td>" . $row_complaint["name"] . "</td>";
        echo "<td>" . $row_complaint["mobile"] . "</td>";
        echo "<td>" . $row_complaint["complaint"] . "</td>";
        echo "<td>" . $row_complaint["state"] . "</td>";
        echo "<td>" . $row_complaint["district"] . "</td>";
        echo "<td>" . $row_complaint["taluk"] . "</td>";
        echo "<td>" . $row_complaint["panchayat"] . "</td>";
        echo "<td>" . $row_complaint["ward"] . "</td>";
        echo "<td>" . $row_complaint["email"] . "</td>";
        echo "</tr>";
        $serial_no++; // Increment serial number counter
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No complaints found.</p>";
}

// Close connection
$conn->close();
?>

<script>
    // Add click event listener to each row to highlight and display details
    var rows = document.querySelectorAll("#complaintTable tbody tr");
    rows.forEach(function(row) {
        row.addEventListener("click", function() {
            // Remove highlight from all rows
            rows.forEach(function(r) {
                r.classList.remove("highlight");
            });
            // Highlight the clicked row
            this.classList.add("highlight");
            // Display details of the clicked row
            var details = "";
            this.childNodes.forEach(function(cell) {
                details += cell.textContent.trim() + "\n";
            });
            alert("Details:\n" + details);
        });
    });
</script>
</body>
</html>




<h2 class="heading"><b>MEMBER INFORMATION</b></h2>
<?php
include("connect.php"); // Assuming this file contains your database connection details

// Fetch data from the 'member' table
$sql = "SELECT * FROM member";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Initialize a counter variable
    $serial = 1;

    // Output table header
    echo "<table border='1'>";
    echo "<tr><th>Serial</th><th>Name</th><th>Mobile</th><th>Email</th><th>Date of Birth</th><th>Country</th><th>State</th><th>District</th><th>Panchayat/Municipality</th><th>Ward</th><th>Occupation</th></tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $serial . "</td>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["mobile"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["dob"]. "</td>";
        echo "<td>" . $row["country"]. "</td>";
        echo "<td>" . $row["state"]. "</td>";
        echo "<td>" . $row["district"]. "</td>";
        echo "<td>" . $row["panchayat"]. "</td>";
        echo "<td>" . $row["ward"]. "</td>";
        echo "<td>" . $row["occupation"]. "</td>";
        echo "</tr>";

        // Increment the counter
        $serial++;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

