<?php
if (!isset($_SESSION['user_email'])) {
    header("Location: /index.php");
    exit();
}
$su_email = $_SESSION['user_email'];
// Student Table Data All 
$sql = "SELECT * FROM student WHERE _email='$su_email'";
$result = $conn->query($sql);

// Admin Table All Data 
$admin_sql = "SELECT * FROM admin WHERE _email='$su_email'";
$admin_result = $conn->query($admin_sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $studentTableData = $row;
    }
}
elseif ($admin_result->num_rows > 0) {
    // output data of each row
    while ($row = $admin_result->fetch_assoc()) {
        $studentTableData = $row;
    }
}
else {
    header("Location: /index.php");
    exit();
}
// $conn->close();
// from Class List Table 
$Class_list_table_data = $conn->query("SELECT * FROM class_list");
// student table Data 
$student_table_data =$conn->query("SELECT * FROM student");
// Admin Table Data 
$admin_table_data = $conn->query("SELECT * FROM admin");
