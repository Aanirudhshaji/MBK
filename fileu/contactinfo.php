<?php
include("connect.php");

// Fetch data from the 'contact' table
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Fetch total count
    $total_count = $result->num_rows;

    // Start table
    echo "<div style='padding: 20px;'><h2>Total Contacts: $total_count</h2></div>";
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Subject</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["subject"] . "</td>";
        echo "</tr>";
    }

    // End table
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No data available.</p>";
}

// Close the database connection
$conn->close();
?>

<style>
    .table {
        width: 90%;
        margin: 0 auto;
        border-collapse: collapse;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .table th {
        background-color: #f2f2f2;
        color: #333;
    }
</style>