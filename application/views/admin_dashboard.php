<html>
    <head>
        <title>Dashboard</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="scripts/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>

    <body>
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        ?>
        <h1>Staff Information</h1>
        <h2><a href ="<?= site_url("admin/logout") ?>">Logout</a></h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Date Start</th>
                    <th>Status</th>
                    <th>Modified</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            foreach ($users as $row):
                ?>
                <tbody>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->firstname ?></td>
                        <td><?= $row->lastname ?></td>
                        <td><?= $row->address ?></td>
                        <td><?= $row->mobile_no ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->username ?></td>
                        <td><?= $row->password ?></td>
                        <td><?= $row->datestart ?></td>
                        <td><?= $row->status ?></td>
                        <td><?= $row->modified ?></td>
                        <td><a href ="<?= site_url("admin/edit/" . $row->id) ?>">Edit</a>|
                            <a href ="<?= site_url("admin/delete/" . $row->id) ?>">Delete</a></td>
                    </tr>
                </tbody>
                <?php
            endforeach;
            ?>

        </table>
    </body>


</html>




