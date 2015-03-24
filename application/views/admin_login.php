<?php echo validation_errors();?>
<?php echo form_open('admins/admin_login') ?>

<h1> Admin Login</h1>

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

<?php echo form_close(); ?><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

