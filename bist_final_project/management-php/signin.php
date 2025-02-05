<?php require_once 'header.php'?>
<div class="authbody">
    <div class="container">
        <div class="signup-content">
            <form action="./dashboard/dashboard.php">
                <h2 class="auth_header">Login</h2>
                <div class="form-group">
                    <input type="email" class="form-input" placeholder="Enter Your Email" required />
                </div>
                <div class="form-group">
                    <input type='password' class="form-input" placeholder="Enter Your Password" required />
                    <!-- {passtext} -->
                </div>
                <div class="form-group">
                    <input type="submit" class="form-submit" value="Sign In" />
                    <input type="reset" class="form-submit" value="Reset" />
                </div>
            </form>
            <p class="loginhere">
                Don't Have account ?
                <a href="signup.php">Create Here</a>
            </p>
        </div>
    </div>
</div>
<?php require_once 'footer.php'?>