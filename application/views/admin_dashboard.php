<html>
    <head>
        <title>Dashboard</title>
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

    <body>
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?>
        <h1 class="text-center">Staff Information</h1><p class="text-right"><a class="btn btn-default" href ="<?= site_url("admin/logout") ?>">Logout</a></p>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Admin ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        
                        <th>Username</th>
                        <th>Password</th>
                        
                        <th>Status</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>

                <?php
                foreach ($users as $row):
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->admin_id?></td>
                            <td><?= $row->firstname ?></td>
                            <td><?= $row->lastname ?></td>
                            
                            <td><?= $row->username ?></td>
                            <td><?= $row->password ?></td>
                            
                            <td><?= $row->status ?></td>
                            
                            <td><a class="btn btn-default" href ="<?= site_url("admin/edit/" . $row->id) ?>">Edit</a>
                                <a class="btn btn-default" href ="<?= site_url("admin/delete/" . $row->id) ?>">Delete</a></td>
                            
                        </tr>
                    </tbody>
                    <?php
                endforeach;
                ?>

            </table>
        </div>
    </body>


</html>




