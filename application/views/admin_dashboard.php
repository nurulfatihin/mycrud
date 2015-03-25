<?php
if($this->session->flashdata('message')){
    echo $this->session->flashdata('message');
}
?>
<h1>Staff Information</h1>
<table border="1">
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
    <?php

<<<<<<< HEAD
    foreach ($user as $row):
=======
    foreach ($users as $row):
>>>>>>> e8b2cd782b06d1cb2261e7f88a776d17b4530d9e
    ?>
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
        <?php
    endforeach;
    ?>
</table>




