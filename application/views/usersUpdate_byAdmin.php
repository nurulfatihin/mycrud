<html>
    <head>
        <title>Edit Page</title>
    </head>
    <body>
        <?php echo validation_errors(); ?>
        <h1>Editting</h1>
        <?php echo form_open('mycrudapp/edit/' . $user->id); ?>
        <p>
            <label>Id :</label>
            <input type="text" name="id" value="<?php echo set_value('id', $user->id); ?>">
        </p>
        <p>
            <label>First Name :</label>
            <input type="text" name="firstname" value="<?php echo set_value('firstname', $user->firstname); ?>">
        </p>
        <p>    
            <label>Last Name :</label>
            <input type="text" name="lastname" value="<?php echo $user->lastname; ?>">
        </p>
        <p>
            <label>Address :</label>
            <input type="text" name="address" value="<?php echo $user->address; ?>">
        </p>
        <p>
            <label>Email :</label>
            <input type="text" name="email" value="<?php echo $user->email; ?>">
        </p>
        <p>
            <label>Mobile Number :</label>
            <input type="text" name="mobile_no" value="<?php echo $user->mobile_no; ?>">
        </p>
        <p>
            <label>Username :</label>
            <input type="text" name="username" value="<?php echo $user->username; ?>">
        </p>
        <p>
            <label>Password :</label>
            <input type="text" name="password" value="<?php echo $user->password; ?>">
        </p>
        <p>
            <label>Date Start :</label>
            <input type="text" name="datestart" value="<?php echo $user->datestart; ?>">
        </p>
        <p>
            <label>Status :</label>
            <input type="text" name="status" value="<?php echo $user->status; ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Save"/>
        </p>
        <?php echo form_close(); ?>
    </body>
</html>

