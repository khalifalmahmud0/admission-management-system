<?php require_once("loginpagehader.php"); ?>
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">

        <form action="accountlogindb.php" method="POST">
          <h1>Login Form</h1>

          <div class="loginor">
            
          </div>
          <div>
            <input type="text" class="form-control" placeholder="Username" name="ccusername" required="" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Password" name="cconfirmpassword" required="" />
          </div>

          <div>
            <!--   <a class="btn btn-default submit" value="Log In" ></a> -->
            <input type="submit" class="btn btn-default submit" name="login" value="Log In">
            <a class="reset_pass" href="htmlrecoverypassword.php">Lost your password?</a>
          </div>

          <div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">New Student?
              <a href="#signup" class="to_register"> Create Account </a>
            </p>
            <div class="clearfix"></div>
            <br />
          </div>
        </form>

      </section>



    </div>
    <div id="register" class="animate form registration_form">
      <section class="login_content">

        <form action="accountcreatedb.php" method="POST" enctype="multipart/form-data">
          <h1>Create Account</h1>
          <div>
            <input type="text" class="form-control" placeholder="Username" required="" name="cusername" />
          </div>
          <div>
            <input type="email" class="form-control" placeholder="Email" required="" name="cemail" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Password" required="" name="cfirstpassword" />
          </div>

          <div>
            <input type="password" class="form-control" placeholder="Confirm Password" required="" name="confirmpassword" />
          </div>

          <div>
            <input type="file" class="form-control" placeholder="image" required="" name="curl" />
          </div>

          <div style="    margin-top: 15px;">
            <input class="btn btn-default" type="submit" name="submit" value="Submit" style="margin-left: 5px;" />
            <input class="btn btn-default" type="reset" name="reset" value="Reset" style="margin-left: -190px;" />
          </div>

          <div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">Already a member ?
              <a href="#signin" class="to_register"> Log in </a>
            </p>
            <div class="clearfix"></div>
            <br />
          </div>
        </form>

      </section>
    </div>
  </div>
</div>

<?php require_once("loginpagefooter.php"); ?>
