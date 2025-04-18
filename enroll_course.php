<?php include "db.php"; include "index.php"; ?>

<h2>Course Enrollment</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['student_id']) || empty($_POST['course_code'])) {
        echo "<p class='error'>Student ID and Course Code are required.</p>";
    } else {
        $stmt = $conn->prepare("INSERT INTO enrollments (student_id, course_code, course_title, semester)
            VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $_POST['student_id'], $_POST['course_code'],
            $_POST['course_title'], $_POST['semester']);
        $stmt->execute();
        echo "<p class='message'>Enrollment successful.</p>";
    }
}
?>
<form method="post">
    <label>Student ID*</label>
    <input type="text" name="student_id" required>
    <label>Course Code*</label>
    <input type="text" name="course_code" required>
    <label>Course Title</label>
    <input type="text"  name="course_title">
    <label>Semester</label><select name="semester">
        <option>Spring</option><option>Summer</option><option>Fall</option>
    </select>
    <button type="submit">Enroll</button>
</form>
