<?php
require_once '../header.php';
require_once '../core.php';
// STUDENT DATA 
$action = $_GET['action'];
$su_name = $_GET['info']['su_name'];
$su_email = $_GET['info']['su_email'];
$su_fa_name = $_GET['info']['su_fa_name'];
$su_ma_name = $_GET['info']['su_ma_name'];
$su_gu_number = $_GET['info']['su_gu_number'];
$su_pass = $_GET['info']['su_pass'];
$su_rep_pass = $_GET['info']['su_rep_pass'];
$su_class = $_GET['info']['su_class'];
$su_group = $_GET['info']['su_group'];
$su_admission_fee = $_GET['info']['su_admission_fee'];
$su_checkbox = $_GET['info']['su_checkbox'];
$password = md5($su_rep_pass);
// Session 
$_SESSION["user_email"] = $su_email;
// SSL DATA 
$val_id = urlencode($_POST['val_id']);
$store_id = urlencode("admis5fde524b72095");
$store_passwd = urlencode("admis5fde524b72095@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=" . $val_id . "&store_id=" . $store_id . "&store_passwd=" . $store_passwd . "&v=1&format=json");
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC
$result = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if ($code == 200 && !(curl_errno($handle))) {
    # TO CONVERT AS ARRAY
    # $result = json_decode($result, true);
    # $status = $result['status'];
    # TO CONVERT AS OBJECT
    $result = json_decode($result);
    # TRANSACTION INFO
    $status = $result->status;
    $tran_date = $result->tran_date;
    $tran_id = $result->tran_id;
    $val_id = $result->val_id;
    $amount = $result->amount;
    $store_amount = $result->store_amount;
    $bank_tran_id = $result->bank_tran_id;
    $card_type = $result->card_type;
    # EMI INFO
    $emi_instalment = $result->emi_instalment;
    $emi_amount = $result->emi_amount;
    $emi_description = $result->emi_description;
    $emi_issuer = $result->emi_issuer;
    # ISSUER INFO
    $card_no = $result->card_no;
    $card_issuer = $result->card_issuer;
    $card_brand = $result->card_brand;
    $card_issuer_country = $result->card_issuer_country;
    $card_issuer_country_code = $result->card_issuer_country_code;
    # API AUTHENTICATION
    $APIConnect = $result->APIConnect;
    $validated_on = $result->validated_on;
    $gw_version = $result->gw_version;
    // Save Data To Database 
    $sql = "SELECT _email FROM student WHERE _email='$su_email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
?>
        <script>
            alertify.confirm('Email Already Exist!', function() {
                window.location.href = '/index.php';
            }).autoOk(5).set({
                title: ""
            });
        </script>
        <?php
    } else {
        $sql = "INSERT INTO student (
        _name,
        _email,
        _father,
        _mother,
        _phone,
        _pass,
        _class,
        _group,
        _image,
        _type,
        _status,
        _date,
        _tran_id,
        _val_id,
        _amount,
        _store_amount,
        _bank_tran_id,
        _card_type,
        _emi_instalment,
        _emi_amount,
        _emi_description,
        _emi_issuer,
        _card_no,
        _card_issuer,
        _card_brand,
        _card_issuer_country,
        _card_issuer_country_code,
        _APIConnect,
        _validated_on,
        _gw_version
        ) VALUES (
        '$su_name',
        '$su_email',
        '$su_fa_name',
        '$su_ma_name',
        '$su_gu_number',
        '$password',
        '$su_class',
        '$su_group',
        NULL,
        '1',
        '$status',
        '$tran_date',
        '$tran_id',
        '$val_id',
        '$amount',
        '$store_amount',
        '$bank_tran_id',
        '$card_type',
        '$emi_instalment',
        '$emi_amount',
        '$emi_description',
        '$emi_issuer',
        '$card_no',
        '$card_issuer',
        '$card_brand',
        '$card_issuer_country',
        '$card_issuer_country_code',
        '$APIConnect',
        '$validated_on',
        '$gw_version'
        )";
        if (mysqli_query($conn, $sql)) {
        ?>
            <script>
                alertify.confirm('Payment Success !', function() {
                    window.location.href = '/dashboard/dashboard.php';
                }).autoOk(5).set({
                    title: ""
                });
            </script>
<?php
        } else {
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
} else {
    echo "Failed to connect with SSLCOMMERZ";
}
require_once '../footer.php';
