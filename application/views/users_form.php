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

                    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo form_open('user/create') ?>
                    <h1> Users Registration</h1>
                    <form class="form" method="post">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input class="form-control" type="text" name="firstname" placeholder="eg:John"/>
                        </div>

                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input class="form-control" type="text" name="lastname" placeholder="eg:Carter"/>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" type="text" name="address" placeholder="eg:No 10 Jln Plumbum 10, 42200, Kapar, Selangor"/>
                        </div>

                        <div class="form-group">
                            <label for="mobile_no">Mobile Phone No.</label>
                            <input class="form-control" type="text" name="mobile_no" placeholder="eg:019-2941123"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="eg:john@gmail.com"/>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="eg:johnsome123"/>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="eg:******"/>
                        </div>

                        <div class="form-group">
                            <label for="datestart">Date Start</label>
                            <input class="form-control" type="date" name="datestart" value=""/>
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="hidden" name="status" value="Pending" />
                        </div>

                        <div class="form-group">
                            <input class="btn btn-default" type="submit"  value="Save"/>

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