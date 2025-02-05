<?php require_once 'header.php'?>
<div class="authbody">
    <div class="container">
        <div class="signup-content">
            <?php
                require_once 'functions.php';
                signup_fun();
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <h2 class="auth_header">Create account</h2>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Enter Your Name" required name="su_name"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Enter Your Email" required name="su_email"/>
                </div>

                <div class="form-group">
                    <input type='password' class="form-input" placeholder="Enter Your Password" required name="su_pass"/>
                </div>

                <div class="form-group">
                    <input type='password' class="form-input" placeholder="Re-Enter Your password" required name="su_rep_pass"/>
                </div>

                <div class="form-input">
                    <label>Upload Image</label>
                    <div class="form-group">
                        <input type="file" required name="su_image"/>
                    </div>
                </div>
                <div class="form-group m-top-checkbox">
                    <input type="checkbox" required name="su_checkbox"/>
                    <label class="label-agree-term">
                        I agree all statements in
                        <a href="#" class="term-service">
                            Terms of service
                        </a>
                    </label>
                </div>

                <div class="form-group">
                    <input type="submit" class="form-submit" value="Sign up" name="su_submit" />
                    <input type="reset" class="form-submit" value="Reset" />
                </div>
            </form>
            <p class="loginhere">
                Have already an account ?
                <a href="signin.php">Login here</a>
            </p>
        </div>
    </div>
</div>
<?php require_once 'footer.php'?>