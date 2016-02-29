<?php echo Asset::css('bootstrap.css'); ?>
<?php echo Asset::css('login.css'); ?>
<div id="login-wrapper" class="col-lg-4 col-lg-offset-4">
    <h2>a fucking login screen</h2>
   <?php if(!empty($login_error)) {echo " <div class='alert-danger alert'>".$login_error."</div>";} ?>
<form action="/site-monitoring/public/auth/login?url=<?php echo $referralUrl; ?>" method="post">
    <label>Username:</label>
    <input class="input-field" type="text" name="username" value="<?php echo $username; ?>" />
    <label>Password:</label>
    <input class="input-field" type="password" name="password" />
    <input type="submit" name="submit" value="Log in" class="btn btn-lg btn-primary pull-right"/>
    <a href="#" class="pull-left" style="padding:12px 30px 10px 0px;">Forgot password?</a>
</form>
    <?php echo $referralUrl; ?>
</div>

