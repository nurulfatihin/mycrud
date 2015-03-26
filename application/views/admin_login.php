<?php echo validation_errors();?>
<?php echo form_open('admin/user_login_process') ?>

<h1> Admin Login</h1>
<form method="post">
<div>
    <label>UserName :</label>
    <input type="text" name="admin_username" value=""/>
</div>

<div>
    <label>Password :</label>
    <input type="password" name="admin_password" value=""/>
</div>

<div>
    <input type="submit" value=" Login " name="submit"/>
</div>
</form>
<?php echo form_close(); ?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

