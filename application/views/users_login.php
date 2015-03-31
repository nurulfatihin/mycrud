<html lang="en">
    <head>

        <title>Staff Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--load the js and css-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </head>

    <body id="page-top" class="index">




        <div class='container'>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('message') . '</div>';
                    }
                    ?>

                    <?php echo form_open('user/user_login_process') ?>

                    <h1> Staff Login</h1>

                    <form class="form" method="post">
                        <div class="form-group <?php echo form_error('username') !== "" ? 'has-error' : ''; ?>">
                            <label>Username :</label>
                            <input class="form-control" type="text" name="username" placeholder="Enter username" value="<?php echo set_value("username"); ?>"/>
                            <?php echo form_error('username', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group <?php echo form_error('password') !== "" ? 'has-error' : ''; ?>">
                            <label>Password :</label>
                            <input class="form-control" type="password" name="password" placeholder="Enter password" value="<?php echo set_value("password"); ?>"/>
                            <?php echo form_error('password', '<span id="helpBlock" class="help-block">', '</span>'); ?>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Login" name="submit"/>
                            <a class="btn btn-default" href="<?php echo site_url('user/create'); ?>">Click Here To Sign Up</a>
                        </div>

                    </form>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/freelancer.js"></script>


    </body>

</html>
