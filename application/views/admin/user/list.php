<a class="add" href='admin/user/add'>Add User</a>
<table class="list">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Alias</th>
		<th>Name</th>
		<th>Role</th>
		<th>Actions</th>
	</tr>
	<?php 
	foreach($user as $row) 
	{ 
	?>
	<tr>
		<td><?php echo $row["id"] ?></td>
		<td><?php echo $row["username"] ?></td>
		<td><?php echo $row["password"] ?></td>
		<td><?php echo $row["alias"] ?></td>
		<td><?php echo $row["name"] ?></td>
		<td><?php echo $row["role"] ?></td>
		<td>
			<a class="edit" href="<?php echo site_url('')."admin/user/delete/".$row['id']?>">X</a>&nbsp;
			<a class="delete" href="<?php echo site_url('')."admin/user/edit/".$row['id']?>">Edit</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>