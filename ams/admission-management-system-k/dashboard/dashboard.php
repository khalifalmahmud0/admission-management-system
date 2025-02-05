<?php require_once '../header.php';
require_once '../core.php';
require_once 'session.php';
?>
    <div class="sb-nav-fixed">
        <?php require_once 'Dheader.php' ?>
        <div id="layoutSidenav">
            <?php require_once 'LeftMenu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php echo $_SESSION["user_email"]; ?>
                    </div>
                </main>
                <?php require_once 'Dfooter.php' ?>
            </div>
        </div>
    </div>
<?php require_once '../footer.php';
?>