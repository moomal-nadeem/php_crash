
<?php
include '002_student.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create an instance of Students class
    $obj = new Students();

    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    // Validate form data as needed

    // Create student record
    $success = $obj->createStudent('students', ['name' => $name, 'email' => $email]);

    if ($success) {
        echo "Student record inserted successfully!";
    } else {
        echo "Error inserting student record. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Student Form</title>
</head>
<body>
    <h2>Create Student</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <!-- Add more fields as needed for other columns -->

        <input type="submit" value="Submit">
    </form>
</body>
</html>
