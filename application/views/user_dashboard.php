<?php
if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
}
?>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Dashboard </h1>
        
       
        <?php echo form_open('user/getUsers/' . $users->id); ?>
        <p>
            <label>Id :</label>
            <label><?php echo $users->id; ?></label>
        </p>
        
        <p>
            <label>First Name :</label>
            <label><?php echo set_value('firstname', $users->firstname); ?></label>
        </p>
        
        <p>    
            <label>Last Name :</label>
            <label><?php echo set_value('lastname', $users->lastname); ?></label>
        </p>
        
        <p>
            <label>Address :</label>
            <label><?php echo set_value('address', $users->address); ?></label>
        </p>
        
        <p>
            <label>Email :</label>
            <label><?php echo set_value('email', $users->email); ?></label>
        </p>
        
        <p>
            <label>Mobile Number :</label>
            <label><?php echo set_value('mobile_no', $users->mobile_no); ?></label>
        </p>
        
        <p>
            <label>Username :</label>
            <label><?php echo set_value('username', $users->username); ?></label>
        </p>
        
        <p>
            <label>Password :</label>
            <label><?php echo set_value('password', $users->password); ?></label>
        </p>
        
        <p>
            <label>Date Start :</label>
            <label><?php echo set_value('datestart', $users->datestart); ?></label>
        </p>
        
        <p>
            <label>Status :</label>
            <label><?php echo set_value('status', $users->status); ?></label>
        </p>
        
        <p><a href ="<?= site_url("user/edit/" . $users->id) ?>">Edit</a>|
            <a href ="<?= site_url("user/logout") ?>">Logout</a>
        </p>
       
    </body>
</html>

