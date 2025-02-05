<?php
require_once '../header.php';
require_once '../core.php';
?>
<div class="authbody" id="signinForm">
    <div class="container">
        <div class="signup-content">
            <!-- <form action="" method="POST" enctype="multipart/form-data" @submit.prevent="submitSignIn"> -->
            <form action="" method="POST">
                <h2 class="auth_header">Login</h2>
                <div class="form-group">
                    <!-- <input type="email" class="form-input" placeholder="Enter Your Email" v-model="signin.su_email" /> -->
                    <input type="email" class="form-input" placeholder="Enter Your Email" name="su_email" required />
                </div>
                <div class="form-group">
                    <!-- <input type='password' class="form-input" placeholder="Enter Your Password" v-model="signin.su_pass" /> -->
                    <input type='password' class="form-input" placeholder="Enter Your Password" name="su_pass" required />
                    <!-- {passtext} -->
                </div>
                <div class="form-group">
                    <input type="submit" class="form-submit" value="Sign In" />
                    <input type="reset" class="form-submit" value="Reset" />
                </div>
            </form>
            <p class="loginhere">
                Don't Have account ?
                <a href="signup.php">Create Here</a>
            </p>
        </div>
    </div>
</div>
<?php
if (isset($_POST['su_email'])) {
    $su_email = $_POST['su_email'];
}
if (isset($_POST['su_pass'])) {
    $su_pass = $_POST['su_pass'];
    $password = md5($su_pass);
}
if (!empty($su_email) and !empty($su_pass)) {
    // Check For Student 
    $sql = "SELECT * FROM student WHERE _email='$su_email' AND _pass='$password'";
    $result = $conn->query($sql);
    // Check For Admin 
    $admin_sql = "SELECT * FROM admin WHERE _email='$su_email' AND _password='$password'";
    $admin_result = $conn->query($admin_sql);
    if ($result->num_rows > 0) {
        $_SESSION["user_email"] = $su_email;
?>
        <script>
            alertify.confirm('Login Success', function() {
                window.location.href = '/dashboard/dashboard.php';
            }).autoOk(1).set({
                title: ""
            });
        </script>
        <?php
        // header("location:/dashboard/dashboard.php");
    }
    // If Admin Mathch 
    elseif ($admin_result->num_rows > 0) {
        while ($row = $admin_result->fetch_assoc()) {
            if ($row['_valid'] === 'YES') {
                $_SESSION["user_email"] = $su_email;
        ?>
                <script>
                    alertify.confirm('Login Success', function() {
                        window.location.href = '/dashboard/dashboard.php';
                    }).autoOk(1).set({
                        title: ""
                    });
                </script>
            <?php
            } else {
            ?>
                <script>
                    alertify.confirm('Account Not Active ! Contact With Super Admin.', function() {
                        window.location.href = '/auth/signin.php';
                    }).autoOk(1).set({
                        title: ""
                    });
                </script>
        <?php
            }
        }
    } else {
    ?>
        <script>
            alertify.alert('Wrong Information! Please Try Again').set({
                title: ""
            });
        </script>
<?php
    }
    $conn->close();
}
?>
<?php require_once '../footer.php' ?>