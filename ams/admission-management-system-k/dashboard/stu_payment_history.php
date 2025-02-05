<?php require_once '../header.php';
require_once '../core.php';
require_once 'session.php';
$_status = $studentTableData['_status'];
$_date = $studentTableData['_date'];
$_tran_id = $studentTableData['_tran_id'];
$_val_id = $studentTableData['_val_id'];
$_amount = $studentTableData['_amount'];
$_store_amount = $studentTableData['_store_amount'];
$_bank_tran_id = $studentTableData['_bank_tran_id'];
$_card_type = $studentTableData['_card_type'];
$_emi_instalment = $studentTableData['_emi_instalment'];
$_emi_amount = $studentTableData['_emi_amount'];
$_emi_description = $studentTableData['_emi_description'];
$_emi_issuer = $studentTableData['_emi_issuer'];
$_card_no = $studentTableData['_card_no'];
$_card_issuer = $studentTableData['_card_issuer'];
$_card_brand = $studentTableData['_card_brand'];
$_card_issuer_country = $studentTableData['_card_issuer_country'];
$_card_issuer_country_code = $studentTableData['_card_issuer_country_code'];
$_APIConnect = $studentTableData['_APIConnect'];
$_validated_on = $studentTableData['_validated_on'];
$_gw_version = $studentTableData['_gw_version'];
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
                                <?php
                                if (!empty($_status)) {
                                ?>
                                    <th>Payment Status</th>
                                <?php
                                }
                                if (!empty($_date)) {
                                ?>
                                    <th>Date</th>
                                <?php
                                }
                                if (!empty($_tran_id)) {
                                ?>
                                    <th>Transaction Id</th>
                                <?php
                                }
                                if (!empty($_val_id)) {
                                ?>
                                    <th>Validation ID</th>
                                <?php
                                }
                                if (!empty($_amount)) {
                                ?>
                                    <th>Amount</th>
                                <?php
                                }
                                if (!empty($_bank_tran_id)) {
                                ?>
                                    <th>Bank Transaction Id</th>
                                <?php
                                }
                                if (!empty($_card_type)) {
                                ?>
                                    <th>Card Type</th>
                                <?php
                                }
                                if (!empty($_emi_instalment)) {
                                ?>
                                    <th>Emi Instalment</th>
                                <?php
                                }
                                if (!empty($_emi_amount)) {
                                ?>
                                    <th>Emi Amount</th>
                                <?php
                                }
                                if (!empty($_emi_description)) {
                                ?>
                                    <th>Emi Description</th>
                                <?php
                                }
                                if (!empty($_emi_issuer)) {
                                ?>
                                    <th>Emi Issuer</th>
                                <?php
                                }
                                if (!empty($_card_no)) {
                                ?>
                                    <th>Card No</th>
                                <?php
                                }
                                if (!empty($_card_issuer)) {
                                ?>
                                    <th>Card Issuer</th>
                                <?php
                                }
                                if (!empty($_card_brand)) {
                                ?>
                                    <th>Card Brand</th>
                                <?php
                                }
                                if (!empty($_card_issuer_country)) {
                                ?>
                                    <th>Card Issuer Country</th>
                                <?php
                                }
                                if (!empty($_card_issuer_country_code)) {
                                ?>
                                    <th>Card Issuer Country Code</th>
                                <?php
                                }
                                if (!empty($_APIConnect)) {
                                ?>
                                    <th>APIConnect</th>
                                <?php
                                }
                                if (!empty($_validated_on)) {
                                ?>
                                    <th>Validated On</th>
                                <?php
                                }
                                if (!empty($_gw_version)) {
                                ?>
                                    <th>Gw Version</th>
                                <?php
                                }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                if (!empty($_status)) {
                                ?>
                                    <td><?php echo $_status; ?></td>
                                <?php
                                }
                                if (!empty($_date)) {
                                ?>
                                    <td><?php echo $_date; ?></td>
                                <?php
                                }
                                if (!empty($_tran_id)) {
                                ?>
                                    <td><?php echo $_tran_id; ?></td>
                                <?php
                                }
                                if (!empty($_val_id)) {
                                ?>
                                    <td><?php echo $_val_id; ?></td>
                                <?php
                                }
                                if (!empty($_amount)) {
                                ?>
                                    <td><?php echo $_amount; ?></td>
                                <?php
                                }
                                if (!empty($_bank_tran_id)) {
                                ?>
                                    <td><?php echo $_bank_tran_id; ?></td>
                                <?php
                                }
                                if (!empty($_card_type)) {
                                ?>
                                    <td><?php echo $_card_type; ?></td>
                                <?php
                                }
                                if (!empty($_emi_instalment)) {
                                ?>
                                    <td><?php echo $_emi_instalment; ?></td>
                                <?php
                                }
                                if (!empty($_emi_amount)) {
                                ?>
                                    <td><?php echo $_emi_amount; ?></td>
                                <?php
                                }
                                if (!empty($_emi_description)) {
                                ?>
                                    <td><?php echo $_emi_description; ?></td>
                                <?php
                                }
                                if (!empty($_emi_issuer)) {
                                ?>
                                    <td><?php echo $_emi_issuer; ?></td>
                                <?php
                                }
                                if (!empty($_card_no)) {
                                ?>
                                    <td><?php echo $_card_no; ?></td>
                                <?php
                                }
                                if (!empty($_card_issuer)) {
                                ?>
                                    <td><?php echo $_card_issuer; ?></td>
                                <?php
                                }
                                if (!empty($_card_brand)) {
                                ?>
                                    <td><?php echo $_card_brand; ?></td>
                                <?php
                                }
                                if (!empty($_card_issuer_country)) {
                                ?>
                                    <td><?php echo $_card_issuer_country; ?></td>
                                <?php
                                }
                                if (!empty($_card_issuer_country_code)) {
                                ?>
                                    <td><?php echo $_card_issuer_country_code; ?></td>
                                <?php
                                }
                                if (!empty($_APIConnect)) {
                                ?>
                                    <td><?php echo $_APIConnect; ?></td>
                                <?php
                                }
                                if (!empty($_validated_on)) {
                                ?>
                                    <td><?php echo $_validated_on; ?></td>
                                <?php
                                }
                                if (!empty($_gw_version)) {
                                ?>
                                    <td><?php echo $_gw_version; ?></td>
                                <?php
                                }
                                ?>
                            </tr>
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