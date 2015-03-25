<?php echo validation_errors();?>
<?php echo form_open('user/user_login_process') ?>

<h1> Staff Login</h1>

<div>
    <label>UserName :</label>
    <input type="text" name="username" id="name" placeholder="username"/>
</div>

<div>
    <label>Password :</label>
    <input type="password" name="password" id="password" placeholder="**********"/>
</div>

<div>
    <input type="submit" value=" Login " name="submit"/>
</div>

<div>
    <a href="user/create">To SignUp Click Here</a>
</div>
<?php echo form_close(); ?>
