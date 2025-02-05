<?php
require_once './core.php';
// PRINT_R FUNCTION 
function do_print($variable){
    echo '<pre>';
    print_r($variable);
    echo '<pre>';
}
/**
 * SignUp Data Received By API 
 */
$data = json_decode(file_get_contents("php://input"));
if (!empty($data->action)) {
// Check If Email Already Exists == Admin Reg Page 
    if($data->action == 'checkDuplicateEmail_FROM_ADMIN_form'){
        $formdata = $data->info;
        $admin_email = $formdata->email;
        // Email Check From Student Table 
        $sql = "SELECT _email FROM student WHERE _email='$admin_email'";
        $result = $conn->query($sql);
        // Email Check From Admin table 
        $admin_sql = "SELECT _email FROM admin WHERE _email='$admin_email'";
        $admin_result = $conn->query($admin_sql);
        
        if ($result->num_rows > 0) {
            echo '1';
        } elseif ($admin_result->num_rows > 0) {
            echo '1';
        } else {
            echo "0";
        }
        $conn->close();
    }
// Check If Email Already Exists == Signup Page 
    if ($data->action == 'checkDuplicateEmail') {
        $formdata = $data->info;
        $su_email = $formdata->su_email;
        // Email Check From Student Table 
        $sql = "SELECT _email FROM student WHERE _email='$su_email'";
        $result = $conn->query($sql);
        // Email Check From Admin table 
        $admin_sql = "SELECT _email FROM admin WHERE _email='$su_email'";
        $admin_result = $conn->query($admin_sql);
        if ($result->num_rows > 0) {
            echo '1';
        }
        elseif ($admin_result->num_rows > 0) {
            echo '1';
        }
        else {
            echo "0";
        }
        $conn->close();
    }
    // Check If Email Already Exists == Profile Page  == Update profile
    if ($data->action == 'Profile_Update_email_check') {
        $formdata = $data->info;
        $profile_id = $formdata->profile_id;
        $su_email = $formdata->up_email;
        $sql = "SELECT id FROM student WHERE _email='$su_email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // print_r($row['id']);
                if ($row['id'] === $profile_id) {
                    echo 'NO';
                } else {
                    echo 'YES';
                }
            }
        } else {
            echo "NO";
        }
        $conn->close();
    }
    // Current Password Check == profile Update Page
    if ($data->action == 'current_pass_match_check') {
        $formdata = $data->info;
        $profile_id = $formdata->profile_id;
        $current_pass = $formdata->current_pass;
        $sql = "SELECT _pass FROM student WHERE id='$profile_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dbCurrentPass = $row['_pass'];
                // echo $dbCurrentPass;
                // echo '<br/>';
                // echo $userGivenCurrentPass;
                if ($dbCurrentPass === md5($current_pass)) {
                    echo '1';
                } else {
                    echo '0';
                }
            }
        } else {
            echo "0";
        }
        $conn->close();
    }
    // Add ClassList From Admin Panel 
    if ($data->action == 'ClassAddFromAdminPanel') {
        $formdata = $data->info;
        foreach ($formdata as $singledata) {
            $class =  $singledata->class;
            $groupORsubject =  $singledata->groupORsubject;
            $availableSeat =  $singledata->availableSeat;
            $admissionFee =  $singledata->admissionFee;
            // Data Insert 
            $sql = "INSERT INTO class_list (class, available_seat, admission_fee, subject_group)
            VALUES ('$class', '$availableSeat', '$admissionFee', '$groupORsubject')";
            if ($conn->query($sql) === TRUE) {
                echo "0";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
    // Admission Fee Info Depends On Class 
    if ($data->action == 'AdmissionFeeDependsOnClass') {
        $class = $data->info;
        $sql = "SELECT * FROM class_list WHERE class='$class'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // do_print($row);
                $available_seat=$row['available_seat'];
                $admission_fee=$row['admission_fee'];
                $subject_group=$row['subject_group'];
                // echo json_encode($row);
            }
        } else {
            echo "0 results";
        }
        // Student table 
        $student_table_sql = "SELECT * FROM student WHERE _class='$class'";
        $student_table_result = $conn->query($student_table_sql);
        $totalStudentOfAClass = $student_table_result->num_rows ;
        $array = [
            'class_list_table_available_seat' => $available_seat,
            'class_list_table_admission_fee' => $admission_fee,
            'class_list_table_subject_group' => $subject_group,
            'student_table_totalStudentOfAClass' => $totalStudentOfAClass,
        ];
        echo json_encode($array);
        $conn->close();
    }
    // Duplicate Class Check ==  Add Class page ==  Dashboard 
    if ($data->action == 'CheckDuplicateClass') {
        $class = $data->info;
        // do_print($class);
        $sql = "SELECT * FROM class_list WHERE class='$class'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo 'Data_Already_Exist';
        }
        else{
            echo 'You_can add_This_Class';
        }
    }
    // Admin Registration Form Data 
    if ($data->action == 'SignUpAsAdminFormData') {
        $formdata = $data->info;
        $name = $formdata->name;
        $email = $formdata->email;
        $confirm_password = $formdata->confirm_password;
        $user_type = $formdata->user_type;
        $user_validation = $formdata->user_validation;
        $password = md5($confirm_password);
            $sql = "INSERT INTO admin (_name, _email, _password, _type, _valid)
            VALUES ('$name', '$email', '$password', '$user_type','$user_validation')";
            if ($conn->query($sql) === TRUE) {
                echo "0";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        $conn->close();
    }
}
// PHP Image Upload Function 
function Image_url() {
    $type     = explode('.', $_FILES['su_image']['name']);
    $type     = $type[count($type) - 1];
    $file_url = './upload/' . uniqid(rand()) . '.' . $type;
    if (in_array($type, ['jpg', 'JPG', 'PNG', 'png'])) {
        if (is_uploaded_file($_FILES['su_image']['tmp_name'])) {
            if (move_uploaded_file($_FILES['su_image']['tmp_name'], $file_url)) {
                return $file_url;
            }
        }
    } else {
        echo 'sorry does not match my extension';
    }
};
// Update Profile Data 
if (isset($_POST['update_profile_data'])) {
    if (isset($_POST['profileID'])) {
        $profileID = $_POST['profileID'];
    }
    if (isset($_POST['up_name'])) {
        $up_name = $_POST['up_name'];
    }
    if (isset($_POST['up_email'])) {
        $up_email = $_POST['up_email'];
    }
    if (isset($_POST['up_fa_name'])) {
        $up_fa_name = $_POST['up_fa_name'];
    }
    if (isset($_POST['up_ma_name'])) {
        $up_ma_name = $_POST['up_ma_name'];
    }
    if (isset($_POST['up_phn_number'])) {
        $up_phn_number = $_POST['up_phn_number'];
    }
    $sql = "UPDATE student SET _name='$up_name', _email='$up_email', _father='$up_fa_name', _mother='$up_ma_name', _phone='$up_phn_number' WHERE id='$profileID'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['user_email'] = $up_email;
        header('Location:dashboard/profile.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
// Change Current Password == Profile Page 
if (isset($_POST['password_change_submit'])) {
    if (isset($_POST['profileID'])) {
        $profileID = $_POST['profileID'];
    }
    if (isset($_POST['new_pass'])) {
        $new_pass = $_POST['new_pass'];
        $password = md5($new_pass);
    }
    $sql = "UPDATE student SET _pass='$password' WHERE id='$profileID'";
    if ($conn->query($sql) === TRUE) {
        require_once 'header.php';
?>
        <script>
            alertify.confirm('Password Update Successfully !', function() {
                window.location.href = '/dashboard/profile.php';
            }).autoOk(1).set({
                title: ""
            });
        </script>
<?php
        // header('Location:dashboard/profile.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
