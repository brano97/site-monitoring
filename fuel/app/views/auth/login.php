<?php echo Asset::css('bootstrap.css'); ?>
<?php echo Asset::css('login.css'); ?>
<div id="login-wrapper" class="col-lg-4 col-lg-offset-4">
    <i class="glyphicon-log-in"></i> THIS IS A FUCKING LOGIN SCREEN
   <?php if(!empty($login_error)) {echo " <div class='alert-danger alert'>".$login_error."</div>";} ?>
<form action="/site-monitoring/public/auth/login" method="post">
    <label>Username:</label>
    <input class="input-field" type="text" name="username" value="<?php if(isset($username)) {echo $username;}?>" />
    <label>Password:</label>
    <input class="input-field" type="password" name="password" />
    <input type="submit" name="submit" value="Login" class="btn btn-lg btn-primary pull-right"/>
</form>
</div>
