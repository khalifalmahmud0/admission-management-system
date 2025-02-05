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
                                <th>Father</th>
                                <th>Mother</th>
                                <th>Phone</th>
                                <th>Class</th>
                                <th>Group</th>
                                <!-- <th>Image</th> -->
                                <th>Payment Status</th>
                                <th>Payment Date</th>
                                <th>Tran. ID</th>
                                <th>Val. ID</th>
                                <th>Amout</th>
                                <th>Store Amout</th>
                                <th>Bank Tran. ID</th>
                                <th>Card Type</th>
                                <th>Emi Instalment</th>
                                <th>Emi Amount</th>
                                <th>Emi Desc.</th>
                                <th>Emi Issuer</th>
                                <th>Card No.</th>
                                <th>Card Issuer</th>
                                <th>Card Brand</th>
                                <th>Card Issuer Country</th>
                                <th>Card Issuer Country Code</th>
                                <th>API Connect</th>
                                <th>Validated ON</th>
                                <th>GW Version</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // All Class List == dashoard admin data == class list page 
                            if ($student_table_data->num_rows > 0) {
                                // output data of each row
                                while ($row = $student_table_data->fetch_assoc()) {
                            ?>
                                    <tr>
                            <td><?php echo $_name = $row['_name']; ?></td>
                            <td><?php echo $_email = $row['_email']; ?></td>
                            <td><?php echo $_father = $row['_father']; ?></td>
                            <td><?php echo $_mother = $row['_mother']; ?></td>
                            <td><?php echo $_phone = $row['_phone']; ?></td>
                            <td><?php echo $_class = $row['_class']; ?></td>
                            <td><?php echo $_group = $row['_group']; ?></td>
                                        <!-- // $_image =$row['_image']; -->
                            <td><?php echo $_status = $row['_status']; ?></td>
                            <td><?php echo $_date = $row['_date']; ?></td>
                            <td><?php echo $_tran_id = $row['_tran_id']; ?></td>
                            <td><?php echo $_val_id = $row['_val_id']; ?></td>
                            <td><?php echo $_amount = $row['_amount']; ?></td>
                            <td><?php echo $_store_amount = $row['_store_amount']; ?></td>
                            <td><?php echo $_bank_tran_id = $row['_bank_tran_id']; ?></td>
                            <td><?php echo $_card_type = $row['_card_type']; ?></td>
                            <td><?php echo $_emi_instalment = $row['_emi_instalment']; ?></td>
                            <td><?php echo $_emi_amount = $row['_emi_amount']; ?></td>
                            <td><?php echo $_emi_description = $row['_emi_description']; ?></td>
                            <td><?php echo $_emi_issuer = $row['_emi_issuer']; ?></td>
                            <td><?php echo $_card_no = $row['_card_no']; ?></td>
                            <td><?php echo $_card_issuer = $row['_card_issuer']; ?></td>
                            <td><?php echo $_card_brand = $row['_card_brand']; ?></td>
                            <td><?php echo $_card_issuer_country = $row['_card_issuer_country']; ?></td>
                            <td><?php echo $_card_issuer_country_code = $row['_card_issuer_country_code']; ?></td>
                            <td><?php echo $_APIConnect = $row['_APIConnect']; ?></td>
                            <td><?php echo $_validated_on = $row['_validated_on']; ?></td>
                            <td><?php echo $_gw_version = $row['_gw_version']; ?></td>
                                    </tr>
                            <?php
                                }
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