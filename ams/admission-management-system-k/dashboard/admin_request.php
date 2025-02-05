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
                    <br>
                    <br>
                    <table id="KHALIF_DATATABLE" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th></th>
                                <!-- <th>Group</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($admin_table_data->num_rows > 0) {
                                // output data of each row
                                while ($row = $admin_table_data->fetch_assoc()) {
                                    $id = $row['id'];
                                    $name = $row['_name'];
                                    $email = $row['_email'];
                                    $valid = $row['_valid'];
                            ?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <form action="" method="POST">
                                            <td>
                                                <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                                                <?php
                                                if ($valid === 'NO') {
                                                ?>
                                                    <button type="submit" class="btn btn-success" name="admin_enable">Enable</button>
                                                <?php
                                                } else {
                                                ?>
                                                    <button type="submit" class="btn btn-danger" name="admin_disable">Disable</button>
                                                <?php
                                                }
                                                ?>
                                        </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    if (isset($_POST['admin_enable'])) {
                        $id = $_POST['admin_id'];
                        $sql = "UPDATE admin SET _valid='YES' WHERE id='$id'";
                        $conn->query($sql);
                    ?>
                        <script>
                            alertify.confirm('Account Enable !', function() {
                                window.location.href = '/dashboard/admin_request.php';
                            }).autoOk(1).set({
                                title: ""
                            });
                        </script>
                    <?php
                    }
                    if (isset($_POST['admin_disable'])) {
                        $id = $_POST['admin_id'];
                        $sql = "UPDATE admin SET _valid='NO' WHERE id='$id'";
                        $conn->query($sql);
                    ?>
                        <script>
                            alertify.confirm('Account Disable !', function() {
                                window.location.href = '/dashboard/admin_request.php';
                            }).autoOk(1).set({
                                title: ""
                            });
                        </script>
                    <?php
                    }
                    ?>
                </div>
            </main>
            <?php require_once 'Dfooter.php' ?>
        </div>
    </div>
</div>
<?php require_once '../footer.php';
?>