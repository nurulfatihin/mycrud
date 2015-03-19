                <?php foreach ($single_user as $user): ?>
                <h1>Editting</h1>
                <form method="post" action="<?php echo base_url() . "index.php/mycrudapp/updateUser"?>">
                    <label id="hide">Id :</label>
                    <input type="text" id="hide" name="id" value="<?php echo $user->id; ?>">
                    <label>First Name :</label>
                    <input type="text" name="firstname" value="<?php echo $user->firstname; ?>">
                    <label>Last Name :</label>
                    <input type="text" name="lastname" value="<?php echo $user->lastname; ?>">
                    <label>Address :</label>
                    <input type="text" name="address" value="<?php echo $user->address; ?>">
                    <label>Email :</label>
                    <input type="text" name="email" value="<?php echo $user->email; ?>">
                    <label>Mobile Number :</label>
                    <input type="text" name="mobile_no" value="<?php echo $user->mobile_no; ?>">
                    <label>Username :</label>
                    <input type="text" name="username" value="<?php echo $user->username; ?>">
                    <label>Password :</label>
                    <input type="text" name="password" value="<?php echo $user->password; ?>">
                    <label>Date Start :</label>
                    <input type="text" name="datestart" value="<?php echo $user->datestart; ?>">
                    <label>Status :</label>
                    <input type="text" name="status" value="<?php echo $user->status; ?>">
                </form>
                <?php endforeach; ?>