<a class="add" href='admin/score/add'>Add Score</a>
<table class="list">
	<tr>
		<th>ID</th>
		<th>Description</th>
		<th>Actions</th>
	</tr>
	<?php 
	foreach($score as $row) 
	{ 
	?>
	<tr>
		<td><?php echo $record["id"] ?></td>
		<td><?php echo $record["desc"] ?></td>
		<td>
			<a class="edit" href="<?php echo site_url('')."admin/score/delete/".$row['id']?>">X</a>&nbsp;
			<a class="delete" href="<?php echo site_url('')."admin/score/edit/".$row['id']?>">Edit</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>