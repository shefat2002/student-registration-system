<?php include "db.php"; include "index.php"; ?>

<h2>Student Registration</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    if (empty($name) || empty($email)) {
        echo "<p class='error'>Name and Email are required.</p>";
    } else {
        $stmt = $conn->prepare("INSERT INTO students (name, email, student_id, department, major, dob, address)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $email, $_POST['student_id'], $_POST['department'],
            $_POST['major'], $_POST['dob'], $_POST['address']);
        $stmt->execute();
        echo "<p class='message'>Student registered successfully.</p>";
    }
}
?>
<form method="post">
    <label>Name*</label>
    <input type="text" name="name" required>
    <label>Email*</label>
    <input type="email" name="email" required>
    <label>Student ID</label><input type="text" name="student_id">
    <label>Department</label><select name="department">
        <option>CSE</option><option>EEE</option><option>BBA</option>
    </select>
    <label>Major</label><select name="major">
        <option>Software</option><option>Networks</option><option>Finance</option>
    </select>
    <label>Date of Birth</label><input type="date" name="dob">
    <label>Address</label><textarea name="address"></textarea>
    <button type="submit">Submit</button>
</form>
