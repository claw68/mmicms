<a class="add" href='admin/criteria/add'>Add Criteria</a>
<table class="list">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Percentage</th>
		<th>Event</th>
		<th>Actions</th>
	</tr>
	<?php 
	foreach($criteria as $row) 
	{ 
	?>
	<tr>
		<td><?php echo $row["id"] ?></td>
		<td><?php echo $row["name"] ?></td>
		<td><?php echo $row["percentage"] ?></td>
		<td><?php echo $row["event"] ?></td>
		<td>
			<a class="edit" href="<?php echo site_url('')."admin/criteria/delete/".$row['id']?>">X</a>&nbsp;
			<a class="delete" href="<?php echo site_url('')."admin/criteria/edit/".$row['id']?>">Edit</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>