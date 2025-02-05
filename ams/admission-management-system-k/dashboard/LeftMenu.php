<?php
require_once '../core.php';
require_once 'session.php';
$_type = $studentTableData['_type'];
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <!-- ====== ADMIN Menu ======== START ===== -->
            <?php
            if ($_type === '0') {
            ?>
                <div class="nav">
                    <a class="nav-link" href="./profile.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Profile
                    </a>
                    <a class="nav-link" href="./admin_request.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Admin Request
                    </a>
                    <a class="nav-link" href="./all_payment_history.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Student Info
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Add Notice
                    </a>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#class_management" aria-expanded="false" aria-controls="class_management">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Manage Class
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="class_management" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="add-class.php">
                                Add Class
                            </a>
                            <a class="nav-link collapsed" href="./class_list.php">
                                Class List
                            </a>
                            <a class="nav-link collapsed" href="#">
                                Class Routine
                            </a>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- ====== ADMIN Menu ======== END ===== -->
            <!-- ====== STUDENT Menu ======== START ===== -->
            <?php
            if ($_type === '1') {
            ?>
                <div class="nav">
                    <a class="nav-link" href="./profile.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Profile
                    </a>
                    <a class="nav-link" href="./stu_payment_history.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Payment Details
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Notice
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Class Routine
                    </a>
                </div>
            <?php
            }
            ?>
            <!-- ====== STUDENT Menu ======== END ===== -->
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php
            if ($_type === '0') {
                echo $loginas = 'ADMIN';
            }
            if ($_type === '1') {
                echo $loginas = 'STUDENT';
            }
            ?>
        </div>
    </nav>
</div>