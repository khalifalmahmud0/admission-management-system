<?php
require_once '../header.php';
require_once '../core.php';
?>
<div class="authbody" id="admin_SignUp_form">
    <div class="container">
        <div class="signup-content">
            <!-- <form action="" method="POST" enctype="multipart/form-data" @submit.prevent="submitSignIn"> -->
            <form action="" @submit.prevent="admin_SignUp_Submit">
                <h2 class="auth_header">Register As Administrator</h2>
                <div class="form-group">
                    <!-- <input type="email" class="form-input" placeholder="Enter Your Email" v-model="signin.su_email" /> -->
                    <input type="text" class="form-input" placeholder="Enter Your Name" name="admin_name" required v-model="AdminSignUp.name" />
                </div>
                <div class="form-group">
                    <!-- <input type="email" class="form-input" placeholder="Enter Your Email" v-model="signin.su_email" /> -->
                    <input type="email" class="form-input" placeholder="Enter Your Email" name="admin_email" required v-model="AdminSignUp.email" v-on:keyup="whenEmailTyping" v-on:change="whenEmailTyping" />
                </div>
                <strong v-if="AdminSignUp.email_exist == true">
                    <p class="errorColor">Email Already Exist ! Please Use Another Email.</p>
                </strong>
                <div class="form-group">
                    <!-- <input type='password' class="form-input" placeholder="Enter Your Password" v-model="signin.su_pass" /> -->
                    <input type='password' class="form-input" placeholder="Enter Your Password" name="admin_pass" required v-model="AdminSignUp.password" />
                    <!-- {passtext} -->
                </div>
                <div class="form-group">
                    <!-- <input type='password' class="form-input" placeholder="Enter Your Password" v-model="signin.su_pass" /> -->
                    <input type='password' class="form-input" placeholder="Enter Your Password Again" name="admin_pass_repeat" required v-model="AdminSignUp.confirm_password" />
                    <!-- {passtext} -->
                </div>
                <strong v-if="AdminSignUp.password !== '' && AdminSignUp.password === AdminSignUp.confirm_password">
                    <p class="successColor">Password Match</p>
                </strong>
                <div class="form-group">
                    <input type="submit" class="form-submit" value="Submit" :disabled="AdminSignUp.email_exist == true || AdminSignUp.password === '' || AdminSignUp.password !== AdminSignUp.confirm_password" />
                    <input type="reset" class="form-submit" value="Reset" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once '../footer.php' ?>