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