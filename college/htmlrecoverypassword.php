<?php require_once("loginpagehader.php") ; ?>

<div class="container recoverypassbody">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form accept-charset="UTF-8" role="form" id="login-recordar" method="post" class="recovery" action="recoverypasswordemailDB.php">
        <fieldset>
          <span class="help-block blockm">
            Enter an Email address , you use to log in to your account.
            <br>
            We'll send you an email with instructions to choose a new password.
          </span>
          <div class="form-group input-group   fieldrecoveryemail">
            <span class="input-group-addon">
              @
            </span>
            <input class="form-control" placeholder="Email" name="recoverypasswordemail" type="email" required="">
          </div>
          <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
            Continue
          </button>
          <p class="help-block">
            <a class="text-muted  backlogin" href="index.php" id="acceso"><small>Back to Login</small></a>
          </p>
        </fieldset>
      </form>
    </div>
  </div>
</div>



<?php require_once("loginpagefooter.php") ; ?>