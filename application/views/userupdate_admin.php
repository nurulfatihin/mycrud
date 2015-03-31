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

                    <?php echo form_open('admin/edit/' . $user->id); ?>
                    <h1>Editting</h1>
                    <form method="post">

                        <div class="form-group">
                            <label>Id :</label>
                            <input class="form-control" type="text" name="id" value="<?php echo set_value('id', $user->id); ?>" disabled/>
                        </div>
                        
                        <div class="form-group <?php echo form_error('admin_id') !== "" ? 'has-error' : ''; ?>">
                            <label>Admin ID :</label>
                            <input class="form-control" type="text" name="admin_id" value="<?php echo set_value('admin_id', $user->admin_id); ?>"/>
                            <?php echo form_error('admin_id', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('firstname') !== "" ? 'has-error' : ''; ?>">
                            <label>First Name :</label>
                            <input class="form-control" type="text" name="firstname" value="<?php echo set_value('firstname', $user->firstname); ?>"/>
                            <?php echo form_error('firstname', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('lastname') !== "" ? 'has-error' : ''; ?>">    
                            <label>Last Name :</label>
                            <input class="form-control" type="text" name="lastname" value="<?php echo set_value('lastname', $user->lastname); ?>"/>
                            <?php echo form_error('lastname', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('address') !== "" ? 'has-error' : ''; ?>">
                            <label>Address :</label>
                            <input class="form-control" type="text" name="address" value="<?php echo set_value('address', $user->address); ?>"/>
                            <?php echo form_error('address', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('email') !== "" ? 'has-error' : ''; ?>">
                            <label>Email :</label>
                            <input class="form-control" type="text" name="email" value="<?php echo set_value('email', $user->email); ?>"/>
                            <?php echo form_error('email', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('mobile_no') !== "" ? 'has-error' : ''; ?>">
                            <label>Mobile Number :</label>
                            <input class="form-control" type="text" name="mobile_no" value="<?php echo set_value('mobile_no', $user->mobile_no); ?>"/>
                            <?php echo form_error('mobile_no', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('username') !== "" ? 'has-error' : ''; ?>">
                            <label>Username :</label>
                            <input class="form-control" type="text" name="username" value="<?php echo set_value('username', $user->username); ?>"/>
                            <?php echo form_error('username', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('password') !== "" ? 'has-error' : ''; ?>">
                            <label>Password :</label>
                            <input class="form-control" type="text" name="password" value="<?php echo set_value('password', $user->password); ?>"/>
                            <?php echo form_error('password', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('datestart') !== "" ? 'has-error' : ''; ?>">
                            <label>Date Start :</label>
                            <input class="form-control" type="date" name="datestart" value="<?php echo set_value('datestart', $user->datestart); ?>"/>
                            <?php echo form_error('datestart', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('status') !== "" ? 'has-error' : ''; ?>">
                            <label>Status :</label>
                            <input class="form-control" type="text" name="status" value="<?php echo set_value('status', $user->status); ?>"/>
                            <?php echo form_error('status', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-default" type="submit"  name="submit"  value="Save"/>
                            <a class="btn btn-default" href="<?php echo site_url('admin/getUsers'); ?>">Cancel</a>
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

