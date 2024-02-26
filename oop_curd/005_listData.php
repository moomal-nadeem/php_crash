<?php
include '002_student.php';

// Initialize Students class
$obj = new Students();

// Create Student
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $success = $obj->createStudent('students', ['name' => $name, 'email' => $email]);

    if ($success) {
        echo "Record created successfully!";
    } else {
        echo "Error creating record.";
    }
}

// Update Student
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $success = $obj->updateStudent('students', ['name' => $name, 'email' => $email], $id);

    if ($success) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record.";
    }
}

// Delete Student
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $success = $obj->deleteStudent('students', $id);

    if ($success) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record.";
    }
}

// Get All Students
$students = $obj->getStudents('students');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD Application</title>
</head>
<body>
    <h2>Create Student</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" name="create" value="Create">
    </form>

    <h2>Students List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $student['id']; ?>">Edit</a>
                <a href="?delete=<?php echo $student['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
