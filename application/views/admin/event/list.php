<a class="add" href='admin/event/add'>Add Event</a>
<table class="list">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Enable</th>
		<th>Show</th>
		<th>Actions</th>
	</tr>
	<?php 
	foreach($event as $row) 
	{ 
	?>
	<tr>
		<td><?php echo $row["id"] ?></td>
		<td><?php echo $row["name"] ?></td>
		<td><?php echo $row["enable"] ?></td>
		<td><?php echo $row["show"] ?></td>
		<td>
			<a class="edit" href="<?php echo site_url('')."admin/event/delete/".$row['id']?>">X</a>&nbsp;
			<a class="delete" href="<?php echo site_url('')."admin/event/edit/".$row['id']?>">Edit</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>