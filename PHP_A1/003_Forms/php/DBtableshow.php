<?php

$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registration Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td>
        <td>".$row["firstname"]."</td>
        <td>".$row["lastname"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["reg_date"]."</td>
        <td><a href='php/records.php'>Edit</a></td>
        <td><a href='php/delete.php'>Delete</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>