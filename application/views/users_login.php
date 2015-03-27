<html lang="en">
    <head>
        <title>User Login</title>   
<<<<<<< HEAD
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
=======
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
>>>>>>> 415000e73b5ada0582958c0ecec4eb97912c23f8
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

<<<<<<< HEAD
        <div class="container"><div class="row"><div class="col-md-6 col-md-offset-3"><h1> Staff Login</h1>
        <form method="post" class="form">
            <div class="form-group">
                <label>Username :</label>
                <input type="text" name="username" value="" class="form-control"/>
            </div>

            <p>
                <label>Password :</label>
                <input type="password" name="password" value="" class="form-control"/>
            </p>

            <p>
                <input type="submit" value="Login" name="submit"/>
            </p>

            <p>
                <a href="user/create">To SignUp Click Here</a>
            </p>
        </form></div></div></div>
        <?php echo form_close(); ?>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>    </body>
=======
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Login" name="submit"/>
                    <a class="btn btn-default" href="user/create">To Sign Up Click Here</a>
                </div>
            </form>
            <?php echo form_close(); ?>
        </div>
    </body>
>>>>>>> 415000e73b5ada0582958c0ecec4eb97912c23f8
</html>
