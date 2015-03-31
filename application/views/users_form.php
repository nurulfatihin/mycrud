<html lang="en">
    <head>
        <title>Register</title>
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


                    <?php echo form_open('user/create') ?>
                    <h1> Users Registration</h1>
                    <form class="form" method="post">
                        <div class="form-group <?php echo form_error('firstname') !== "" ? 'has-error' : ''; ?>">
                            <label for="firstname">First Name</label>
                            <input class="form-control" type="text" name="firstname" placeholder="eg:John" value="<?php echo set_value("firstname"); ?>"<?php preg_match('/^[a-z0-9 .\-]+$/i', "firstname");?>/>
                            <?php echo form_error('firstname', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('lastname') !== "" ? 'has-error' : ''; ?>">
                            <label for="lastname">Last Name</label>
                            <input class="form-control" type="text" name="lastname" placeholder="eg:Carter" value="<?php echo set_value("lastname"); ?>"/>
                            <?php echo form_error('lastname', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('address') !== "" ? 'has-error' : ''; ?>">
                            <label for="address">Address</label>
                            <input class="form-control" type="text" name="address" placeholder="eg:No 10 Jln Plumbum 10, 42200, Kapar, Selangor" value="<?php echo set_value("address"); ?>"/>
                            <?php echo form_error('address', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('mobile_no') !== "" ? 'has-error' : ''; ?>">
                            <label for="mobile_no">Mobile Phone No.</label>
                            <input class="form-control" type="text" name="mobile_no" placeholder="eg:019-2941123" value="<?php echo set_value("mobile_no"); ?>"/>
                            <?php echo form_error('mobile_no', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('email') !== "" ? 'has-error' : ''; ?>">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="eg:john@gmail.com" value="<?php echo set_value("email"); ?>"/>
                            <?php echo form_error('email', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('username') !== "" ? 'has-error' : ''; ?>">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="eg:johnsome123" value="<?php echo set_value("username"); ?>"/>
                            <?php echo form_error('username', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('password') !== "" ? 'has-error' : ''; ?>">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="eg:******" value="<?php echo set_value("password"); ?>"/>
                            <?php echo form_error('password', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('datestart') !== "" ? 'has-error' : ''; ?>">
                            <label for="datestart">Date Start</label>
                            <input class="form-control" type="date" name="datestart" value="<?php echo set_value("datestart"); ?>"/>
                            <?php echo form_error('datestart', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="hidden" name="status" value="Pending" />
                        </div>

                        <div class="form-group">
                            <input class="btn btn-default" type="submit"  value="Save"/>
                            <a class="btn btn-default" href="<?php echo site_url('user'); ?>">Cancel</a>

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