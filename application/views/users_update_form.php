<html lang="en">
    <head>
        <title>Edit Page</title>
        <!--load the js and css-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </head>
    <body>
        <div class='container'>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('message') . '</div>';
                    }
                    ?>

                    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo form_open('user/edit/' . $user->id); ?>
                    <h1>Editting</h1>
                    <form method="post">

                        <div class="form-group">
                            <label>First Name :</label>
                            <input class="form-control" type="text" name="firstname" value="<?php echo set_value('firstname', $user->firstname); ?>">
                        </div>
                        <div class="form-group">    
                            <label>Last Name :</label>
                            <input class="form-control" type="text" name="lastname" value="<?php echo set_value('lastname', $user->lastname); ?>">
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input class="form-control" type="text" name="address" value="<?php echo set_value('address', $user->address); ?>">
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input class="form-control" type="text" name="email" value="<?php echo set_value('email', $user->email); ?>">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number :</label>
                            <input class="form-control" type="text" name="mobile_no" value="<?php echo set_value('mobile_no', $user->mobile_no); ?>">
                        </div>
                        <div class="form-group">
                            <label>Username :</label>
                            <input class="form-control" type="text" name="username" value="<?php echo set_value('username', $user->username); ?>">
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            <input class="form-control" type="text" name="password" value="<?php echo set_value('password', $user->password); ?>">
                        </div>
                        <div class="form-group">
                            <label>Date Start :</label>
                            <input class="form-control" type="text" name="datestart" value="<?php echo set_value('datestart', $user->datestart); ?>">
                        </div>
                        <div class="form-group">
                            <label>Status :</label>
                            <input class="form-control" type="text" name="status" value="<?php echo set_value('status', $user->status); ?>">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" value="Save"/>
                        </div>
                    </form>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

