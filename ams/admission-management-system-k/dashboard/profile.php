<?php require_once '../header.php';
require_once '../core.php';
require_once 'session.php';
?>
<?php
$_type = $studentTableData['_type'];
?>
<div class="sb-nav-fixed">
    <?php require_once 'Dheader.php' ?>
    <div id="layoutSidenav">
        <?php require_once 'LeftMenu.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <br>
                    <br>
                    <!-- =============================STUDENT PROFILE DATA HERE ============== START ================ -->
                    <?php
                    if ($_type === '1') {
                        $id = $studentTableData['id'];
                        $_name = $studentTableData['_name'];
                        $_email = $studentTableData['_email'];
                        $_father = $studentTableData['_father'];
                        $_mother = $studentTableData['_mother'];
                        $_phone = $studentTableData['_phone'];
                        $_class = $studentTableData['_class'];
                        $_group = $studentTableData['_group'];
                        $_image = $studentTableData['_image'];
                        $_date = $studentTableData['_date'];
                        $_role = 'Student';
                    ?>
                        <div class="container">
                            <div class="main-body">
                                <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                    <div class="mt-3">
                                                        <h4><?php echo $_name; ?></h4>
                                                        <p class="text-secondary mb-1"><?php echo $_role . ' Of Class ' . $_class; ?></p>
                                                        <p class="text-muted font-size-sm">Roll : <?php echo $id; ?></p>
                                                        <h6 class="text-muted font-size-sm">Admission Date : <?php echo $_date; ?></h6>
                                                        <!-- Change Password Start  -->
                                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ChangePassword">
                                                            Change Password
                                                        </button>
                                                        <div class="modal fade" id="ChangePassword" tabindex="-1" aria-labelledby="ChangePasswordLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6>Change Password</h6>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form style="text-align: left;" action="../functions.php" method="POST" id="current_pass_match_check">
                                                                            <input type="hidden" name="profileID" value="<?php echo $id; ?>">
                                                                            <div class="mb-3">
                                                                                <label for="current_pass" class="form-label">Current Password</label>
                                                                                <input type="password" name="current_pass" class="form-control" id="current_pass" v-model="change_pass.current_pass" v-on:keyup="whenPassTyping" v-on:change="whenPassTyping" required>
                                                                            </div>
                                                                            <strong v-if="change_pass.pass_match === false && change_pass.current_pass != ''">
                                                                                <p class="errorColor">Password Not Match ! </p>
                                                                            </strong>
                                                                            <strong v-if="change_pass.pass_match === true">
                                                                                <p class="successColor">Password Match ! </p>
                                                                            </strong>
                                                                            <div class="mb-3">
                                                                                <label for="new_pass" class="form-label">New Password</label>
                                                                                <input type="password" name="new_pass" class="form-control" id="new_pass" required>
                                                                            </div>
                                                                            <input name="password_change_submit" :disabled="change_pass.pass_match === false" name="change_password" type="submit" class="form-submit btn btn-primary" value="Update" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Change Password End  -->
                                                        <!-- Update Profile Start  -->
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#UpdateProfileDataModal">
                                                            Update Profile
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="UpdateProfileDataModal" tabindex="-1" aria-labelledby="UpdateProfileDataModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h6>Update Profile</h6>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form style="text-align: left;" action="../functions.php" method="POST" id="vueEmailCheck_updateProfilePage">
                                                                            <input type="hidden" name="profileID" value="<?php echo $id; ?>" id="profileIDEmailChe">
                                                                            <div class="mb-3">
                                                                                <label for="up_name" class="form-label">Name</label>
                                                                                <input type="text" name="up_name" class="form-control" id="up_name" value="<?php echo $_name; ?>" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="up_email" class="form-label">Email</label>
                                                                                <input type="email" name="up_email" class="form-control" id="up_email" value="<?php echo $_email; ?>" v-model="update_profile.up_email" v-on:keyup="whenEmailTyping" v-on:change="whenEmailTyping" required>
                                                                            </div>
                                                                            <strong v-if="update_profile.up_email_exist == true">
                                                                                <p class="errorColor">Email Already Exist ! Please Use Another Email.</p>
                                                                            </strong>
                                                                            <div class=" mb-3">
                                                                                <label for="up_fa_name" class="form-label">Father Name</label>
                                                                                <input type="text" name="up_fa_name" class="form-control" id="up_fa_name" value="<?php echo $_father; ?>" required>
                                                                            </div>
                                                                            <div class=" mb-3">
                                                                                <label for="up_ma_name" class="form-label">Mother Name</label>
                                                                                <input type="text" name="up_ma_name" class="form-control" id="up_ma_name" value="<?php echo $_mother; ?>" required>
                                                                            </div>
                                                                            <div class=" mb-3">
                                                                                <label for="up_phn_number" class="form-label">Phone Number</label>
                                                                                <input type="text" name="up_phn_number" class="form-control" id="up_phn_number" value="<?php echo $_phone; ?>" required>
                                                                            </div>
                                                                            <input :disabled="update_profile.up_email_exist === true" name="update_profile_data" type="submit" class="form-submit btn btn-primary" value="Update" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Update Profile End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Full Name</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $_name; ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $_email; ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Father Name</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $_father; ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mother Name</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $_mother; ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mobile Number</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $_phone; ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Class</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $_class; ?>
                                                    </div>
                                                </div>
                                                <?php
                                                if ($_class == 9) {
                                                ?>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <h6 class="mb-0">Group</h6>
                                                        </div>
                                                        <div class="col-sm-9 text-secondary">
                                                            <?php echo $_group; ?>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- =============================STUDENT PROFILE DATA HERE ============== END ================ -->

                    <!-- =============================ADMIN PROFILE DATA HERE ============== START ================ -->
                    <?php
                    if ($_type === '0') {
                        $_role = 'Admin';
                        
                        echo 'I AM A Admin';
                    }
                    ?>
                    <!-- =============================STUDENT PROFILE DATA HERE ============== EMD ================ -->
                </div>
            </main>
            <?php require_once 'Dfooter.php' ?>
        </div>
    </div>
</div>
<?php require_once '../footer.php';
?>