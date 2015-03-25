<html>
    <head>
        <title>Edit Page</title>
    </head>
    <body>
        <h1>Editting</h1>
        <h2>
            <a href="user_form">Logout</a> |
            <a href="user/edit"> Update</a>
        </h2>
        <?php echo form_open('user/edit/' . $user->id); ?>
        <p>
            <label>Id :</label>
            <label>"<?php echo set_value('id', $user->id); ?>"</label>>
        </p>
        <p>
            <label>First Name :</label>
            <label>"<?php echo set_value('firstname', $user->firstname); ?>"</label>>
        </p>
        <p>    
            <label>Last Name :</label>
            <label>"<?php echo set_value('lastname', $user->lastname); ?>"</label>
        </p>
        <p>
            <label>Address :</label>
            <label>"<?php echo set_value('address', $user->address); ?>"</label>
        </p>
        <p>
            <label>Email :</label>
            <label>"<?php echo set_value('email', $user->email); ?>"</label>
        </p>
        <p>
            <label>Mobile Number :</label>
            <label>"<?php echo set_value('mobile_no', $user->mobile_no); ?>"</label>
        </p>
        <p>
            <label>Username :</label>
            <label>"<?php echo set_value('username', $user->username); ?>"></label>
        </p>
        <p>
            <label>Password :</label>
            <label>"<?php echo set_value('password', $user->password); ?>"</label>
        </p>
        <p>
            <label>Date Start :</label>
            <label>"<?php echo set_value('datestart', $user->datestart); ?>"></label>
        </p>
        <p>
            <label>Status :</label>
            <label>"<?php echo set_value('status', $user->status); ?>"</label>
            
        </p>
        
    </body>
</html>

