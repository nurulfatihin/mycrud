<h1>Staff Information</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>First Name</th>
                        <th>Last Name</th>
			<th>First Name</th>
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
                    foreach($records as $row):
                ?>
                <tr>
			<td><?=$row->id?></td>
			<td><?=$row->firstname?></td>
                        <td><?=$row->lastname?></td>
                        <td><?=$row->address?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->mobile_no?></td>
                        <td><?=$row->username?></td>
                        <td><?=$row->password?></td>
                        <td><?=$row->datestart?></td>
                        <td><?=$row->status?></td>
                        <td><?=$row->modified?></td>
                        <td><a href ="<?php echo base_url() . "index.php/mycrudapp/updateUser"?>"> Edit</a> |
                        <a href ="mycrud.local/index.php/mycudapp/delete">Delete</a></td>
		</tr>
                <?php
                    endforeach;
                ?>
	</table>




