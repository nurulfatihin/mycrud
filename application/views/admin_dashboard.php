<?php
<<<<<<< HEAD
if ($this->session->flashdata('message')) {
=======
if($this->session->flashdata('message')){
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
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
    foreach ($users as $row):
=======
    foreach ($records as $row):
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
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
            <td><a href ="<?= site_url("mycrudapp/edit/" . $row->id) ?>">Edit</a>|
<<<<<<< HEAD
                <a href ="<?= site_url("/mycrudapp/delete/" . $row->id) ?>">Delete</a></td>
=======
                <a href ="<?= site_url("mycrudapp/delete/" . $row->id) ?>">Delete</a></td>
>>>>>>> e524837cb8ed96fa3ced288ad3af750fe6f7bf9f
        </tr>
        <?php
    endforeach;
    ?>
</table>




