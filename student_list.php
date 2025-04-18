<?php include "db.php"; include "index.php"; ?>

<h2>Student List</h2>
<table border="1">
<tr><th>Name</th><th>Student ID</th><th>Department</th><th>Major</th><th>Email</th></tr>
<?php
$result = $conn->query("SELECT name, student_id, department, major, email FROM students");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['student_id']}</td>
            <td>{$row['department']}</td>
            <td>{$row['major']}</td>
            <td>{$row['email']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data in the table</td></tr>";
}
?>
</table>
