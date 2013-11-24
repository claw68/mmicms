<a class="add" href='admin/contestant/add'>Add Contestant</a>
<table class="list">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Number</th>
		<th>Gender</th>
		<th>Picture</th>
		<th>Thumbnail</th>
		<th>Actions</th>
	</tr>
	<?php 
	$gender = Array('m'=>'Male','f'=>'Female');
	foreach($contestant as $row) 
	{ 
	?>
	<tr>
		<td><?php echo $row["id"] ?></td>
		<td><?php echo $row["name"] ?></td>
		<td><?php echo $row["number"] ?></td>
		<td><?php echo $gender["{$row['gender']}"]; ?></td>
		<td><?php echo $row["picture"] ?></td>
		<td><?php echo $row["thumbnail"] ?></td>
		<td>
			<a class="edit" href="<?php echo site_url('')."admin/contestant/delete/".$row['id']?>">X</a>&nbsp;
			<a class="delete" href="<?php echo site_url('')."admin/contestant/edit/".$row['id']?>">Edit</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>