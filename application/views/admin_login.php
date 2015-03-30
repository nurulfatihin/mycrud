<html lang="en">
    <head>
        <title>Admin Login</title>

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
                    <?php echo form_open('admin/admin_login_process') ?>

                    <h1> Admin Login</h1>
                    <form class="form" method="post">
                        <div class="form-group">
                            <label>Username :</label>
                            <input class="form-control" type="text" name="admin_username" placeholder="Enter username"/>
                        </div>

                        <div class="form-group">
                            <label>Password :</label>
                            <input class="form-control" type="password" name="admin_password" placeholder="Enter password"/>                        
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Login" name="submit"/>
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
