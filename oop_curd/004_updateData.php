<?php
include '002_student.php';

// Initialize Students class
$obj = new Students();

// Check if form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Call updateStudent function
    $success = $obj->updateStudent('students', ['name' => $name, 'email' => $email], $id);

    if ($success) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record.";
    }
}

// Retrieve previous data if editing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $student = $obj->getStudentById('students', $id);
    if ($student) {
        $name = $student['name'];
        $email = $student['email'];
    } else {
        echo "Student not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student Form</title>
</head>
<body>
    <h2>Update Student Record</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"><br><br>

        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
