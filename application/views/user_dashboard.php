<html>
    <head>
        <title>Edit Page</title>
    </head>
    <body>
        <h1>Dashboard</h1>
        
        <p>
            <label>Id :</label>
            <label>"<?php echo  $data->id; ?>"</label>>
        </p>
        <p>
            <label>First Name :</label>
            <label>"<?php echo set_value('firstname', $data->firstname); ?>"</label>>
        </p>
        <p>    
            <label>Last Name :</label>
            <label>"<?php echo set_value('lastname', $data->lastname); ?>"</label>
        </p>
        <p>
            <label>Address :</label>
            <label>"<?php echo set_value('address', $data->address); ?>"</label>
        </p>
        <p>
            <label>Email :</label>
            <label>"<?php echo set_value('email', $data->email); ?>"</label>
        </p>
        <p>
            <label>Mobile Number :</label>
            <label>"<?php echo set_value('mobile_no', $data->mobile_no); ?>"</label>
        </p>
        <p>
            <label>Username :</label>
            <label>"<?php echo set_value('username', $data->username); ?>"></label>
        </p>
        <p>
            <label>Password :</label>
            <label>"<?php echo set_value('password', $data->password); ?>"</label>
        </p>
        <p>
            <label>Date Start :</label>
            <label>"<?php echo set_value('datestart', $data->datestart); ?>"></label>
        </p>
        <p>
            <label>Status :</label>
            <label>"<?php echo set_value('status', $data->status); ?>"</label>  
        </p>
        
        <p><a href ="<?= site_url("user/edit/" . $data->id) ?>">Edit</a>|
                <a href ="<?= site_url("user_login" . $data->id) ?>">Logout</a>
        </p>
    </body>
</html>

