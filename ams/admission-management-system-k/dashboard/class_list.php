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
                                <th>Class</th>
                                <th>Available Seat</th>
                                <th>Admission Fee</th>
                                <!-- <th>Group</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // All Class List == dashoard admin data == class list page 
                            if ($Class_list_table_data->num_rows > 0) {
                                // output data of each row
                                while ($row = $Class_list_table_data->fetch_assoc()) {
                                    $class = $row['class'];
                                    $available_seat = $row['available_seat'];
                                    $admission_fee = $row['admission_fee'];
                                    // $subject_group = $row['subject_group'];
                            ?>
                                    <tr>
                                        <td><?php echo $class; ?></td>
                                        <td><?php echo $available_seat; ?></td>
                                        <td><?php echo $admission_fee; ?></td>
                                        <!-- <td> -->
                                            <?php 
                                            // echo $subject_group; 
                                            ?>
                                        <!-- </td> -->
                                    </tr>
                            <?php
                                }
                            } else {
                                header("Location: /index.php");
                                exit();
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
            <?php require_once 'Dfooter.php' ?>
        </div>
    </div>
</div>
<?php require_once '../footer.php';
?>