<html lang="en">
    <head>
        <title>User Login</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </head>
    <body>
        <div class='container'>
            <?php
            if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('message') . '</div>';
            }
            ?>

            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?php echo form_open('user/user_login_process') ?>
            <h1> Staff Login</h1>
            <form class="form" method="post">
                <div class="form-group">
                    <label>Username :</label>
                    <input class="form-control" type="text" name="username" value="" />
                </div>

                <div class="form-group">
                    <label>Password :</label>
                    <input class="form-control" type="password" name="password" value=""/>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Login" name="submit"/>
                    <a class="btn btn-default" href="user/create">To Sign Up Click Here</a>
                </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
