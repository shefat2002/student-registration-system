<?php include "db.php"; include "index.php"; ?>

<h2>Enrollment History</h2>
<form method="post">
    <label>Student ID</label>
    <input type="text" name="student_id">
    <button type="submit">Search</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['student_id'])) {
    $id = $_POST['student_id'];
    $stmt = $conn->prepare("SELECT course_code, course_title, semester, grade FROM enrollments WHERE student_id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    echo "<table border='1'><tr><th>Course Code</th><th>Course Title</th><th>Semester</th><th>Grade</th></tr>";
    if ($result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo "<tr><td>{$r['course_code']}</td><td>{$r['course_title']}</td>
                <td>{$r['semester']}</td><td>{$r['grade']}</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data available</td></tr>";
    }
    echo "</table>";
}
?>
