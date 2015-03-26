<?php echo validation_errors();?>
<?php echo form_open('user/user_login_process') ?>

<h1> Staff Login</h1>
<form method="post">
<div>
    <label>Username :</label>
    <input type="text" name="username" value=""/>
</div>

<div>
    <label>Password :</label>
    <input type="password" name="password" value=""/>
</div>

<div>
    <input type="submit" value="Login" name="submit"/>
</div>

<div>
    <a href="user/create">To SignUp Click Here</a>
</div>
</form>
<?php echo form_close(); ?>
