<?php
if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
}
?>
<html lang="en">
    <head>
        <title>Dashboard</title>

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
                    <h1>Dashboard </h1>


                    <?php echo form_open('user/getUsers/' . $users->id); ?>
                    <form class="form">
                        
                        <div>            
                            <label>First Name :</label>
                            <input class="form-control" type="text" name="firstname" placeholder="<?php echo $users->firstname; ?>" disabled/>                        
                        <div>    
                            <label>Last Name :</label>
                            <input class="form-control" type="text" name="lastname" placeholder="<?php echo $users->lastname; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Address :</label>
                            <input class="form-control" type="text" name="address" placeholder="<?php echo $users->address; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Email :</label>
                            <input class="form-control" type="text" name="email" placeholder="<?php echo $users->email; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Mobile Number :</label>
                            <input class="form-control" type="text" name="mobile_no" placeholder="<?php echo $users->mobile_no; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Username :</label>
                            <input class="form-control" type="text" name="username" placeholder="<?php echo $users->username; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Password :</label>
                            <input class="form-control" type="text" name="password" placeholder="<?php echo $users->password; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Date Start :</label>
                            <input class="form-control" type="text" name="datestart" placeholder="<?php echo $users->datestart; ?>" disabled/>                        
                        </div>

                        <div>
                            <label>Status :</label>
                            <input class="form-control" type="text" name="status" placeholder="<?php echo $users->status; ?>" disabled/>                        
                        </div>


                        <div><a class="btn btn-default" href ="<?= site_url("user/edit/" . $users->id) ?>">Edit</a>|
                            <a class="btn btn-default" href ="<?= site_url("user/logout") ?>">Logout</a>                           
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>

