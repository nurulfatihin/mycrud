<?php foreach ($users as $users): ?>
<h1>Editting</h1>
<form method="post" action="<?php echo base_url() . "index.php/mycrudapp/edit"?>">
    <p>
        <label id="hide">Id :</label>
        <input type="text" name="id" value="<?php echo $users->id; ?>">
    </p>
    <p>
        <label>First Name :</label>
        <input type="text" name="firstname" value="<?php echo $users->firstname; ?>">
    </p>
    <p>    
        <label>Last Name :</label>
        <input type="text" name="lastname" value="<?php echo $users->lastname; ?>">
    </p>
    <p>
                    <label>Address :</label>
                    <input type="text" name="address" value="<?php echo $users->address; ?>">
    </p>
    <p>
                    <label>Email :</label>
                    <input type="text" name="email" value="<?php echo $users->email; ?>">
    </p>
    <p>
                    <label>Mobile Number :</label>
                    <input type="text" name="mobile_no" value="<?php echo $users->mobile_no; ?>">
    </p>
    <p>
                    <label>Username :</label>
                    <input type="text" name="username" value="<?php echo $users->username; ?>">
    </p>
    <p>
                    <label>Password :</label>
                    <input type="text" name="password" value="<?php echo $users->password; ?>">
    </p>
    <p>
                    <label>Date Start :</label>
                    <input type="text" name="datestart" value="<?php echo $users->datestart; ?>">
    </p>
    <p>
                    <label>Status :</label>
                    <input type="text" name="status" value="<?php echo $users->status; ?>">
    </p>
    <p>
        <input type="submit" name = "submit" value="Save"/>
    </p>
</form>
                <?php endforeach; ?>

                