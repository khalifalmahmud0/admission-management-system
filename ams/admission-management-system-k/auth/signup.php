<?php
require_once '../header.php';
require_once '../core.php';
?>
<div class="authbody" id="signupForm">
    <div class="container">
        <div class="signup-content">
            <form action="" method="POST" enctype="multipart/form-data" @submit.prevent="submitSignUp">
                <h2 class="auth_header">Create account</h2>
                <?php
                $sql = "SELECT DISTINCT class FROM class_list ORDER BY class";
                $result = $conn->query($sql);
                ?>
                <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <label for="su_name">Your Name</label>
                            <input required type="text" class="form-input" placeholder="Name" v-model="signup.su_name" id="su_name" />
                        </div>
                        <div class="form-group">
                            <label for="su_email">Your Email</label>
                            <input required type="email" class="form-input" placeholder="Email" v-model="signup.su_email" id="su_email" v-on:keyup="whenEmailTyping" v-on:change="whenEmailTyping" />
                        </div>
                        <strong v-if="signup.su_email_exist == true">
                            <p class="errorColor">Email Already Exist ! Please Use Another Email.</p>
                        </strong>
                        <div class="form-group">
                            <label for="su_class">Which Class You Want To Admit?</label>
                            <select required class="form-control" id="su_class" v-model="signup.su_class" @change.prevent="classSelect()">
                                <option disabled=" disabled" value="">—Select Class—</option>
                                <?php
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $class = $row['class'];
                                ?>
                                        <option><?php echo $class; ?></option>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>
                        <div class="form-group" v-if="signup.su_class == '9'">
                            <label for="su_group">Group</label>
                            <select class="form-control" id="su_group" v-model="signup.su_group" :required="signup.su_class == '9'">
                                <option disabled="disabled" value="">—Select Group—</option>
                                <option>SCIENCE</option>
                                <option>COMMERCE</option>
                                <option>ARTS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total_seat">Total Seat</label>
                            <input disabled type='text' class="form-input" id="total_seat" v-model="signup.su_total_seat" />
                        </div>
                        <div class="form-group">
                            <label for="availablae_seat">Available Seat</label>
                            <input disabled type='text' class="form-input" id="availablae_seat" v-model="signup.su_available_seat" />
                        </div>
                        <div class="form-group">
                            <label for="admission_fee">Admission Fee</label>
                            <input disabled type='text' class="form-input" id="admission_fee" v-model="signup.su_admission_fee" />
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <label for="su_fa_name">Your Father Name</label>
                            <input required type="text" class="form-input" placeholder="Father Name" v-model="signup.su_fa_name" id="su_fa_name" />
                        </div>
                        <div class="form-group">
                            <label for="su_ma_name">Your Mother Name</label>
                            <input required type="text" class="form-input" placeholder="Mother Name" v-model="signup.su_ma_name" id="su_ma_name" />
                        </div>
                        <div class="form-group">
                            <label for="su_gu_number">Guardian Phone Number</label>
                            <input required type="tel" class="form-input" placeholder="Phone Number" v-model="signup.su_gu_number" id="su_gu_number" />
                        </div>
                        <div class="form-group">
                            <label for="su_pass">password</label>
                            <input required type='password' class="form-input" placeholder="Password" v-model="signup.su_pass" id="su_pass" />
                        </div>
                        <div class="form-group">
                            <label for="su_rep_pass">Re-Enter password</label>
                            <input required type='password' class="form-input" placeholder="Re-Enter password" v-model="signup.su_rep_pass" id="su_rep_pass" />
                        </div>
                        <strong v-if="signup.su_pass !== '' && signup.su_pass === signup.su_rep_pass">
                            <p class="successColor">Password Match</p>
                        </strong>
                        <!-- <div class="form-group">
                    <label for="su_image">Upload Image</label>
                    <input type="file"  v-model="signup.su_image" id="su_image" />
                </div>  -->
                        <div class="form-group m-top-checkbox">
                            <input required type="checkbox" v-model="signup.su_checkbox" />
                            <label class="label-agree-term">
                                I agree all statements in
                                <a href="#" class="term-service">
                                    Terms of service
                                </a>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-submit" value="Pay Now" :disabled="signup.su_email_exist == true || signup.su_pass === '' || signup.su_pass !== signup.su_rep_pass" />
                            <input type="reset" class="form-submit" value="Reset" />
                        </div>
                    </div>
                </div>
            </form>
            <p class="loginhere">
                Have already an account ?
                <a href="signin.php">Login here</a>
            </p>
        </div>
    </div>
</div>
<?php require_once '../footer.php' ?>