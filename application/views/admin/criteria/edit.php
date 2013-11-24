<script>
function validate()
{
	var message  ="";
	
	if($('#name').val() == '' || $('#name').val() == null)
	{
		message += 'Name should have a value\n';
	}
	
	if($('#percentage').val() == '' || $('#percentage').val() == null)
	{
		message += 'Percentage should have a value\n';
	}
	
	if($('#event').val() == '' || $('#event').val() == null)
	{
		message += 'Event should have a value\n';
	}
	
	if(message == "")
	{
		return true;
	}
	else
	{
		alert(message);
		return false;
	}
}
</script>
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/criteria/doEdit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='name'>Name</label></td>
			<td><input type='text' value='<?php echo $criteria['name']; ?>' id='name' name='name' /></td>
		</tr>
		<tr>
			<td><label for='percentage'>Percentage</label></td>
			<td><input type='text' value='<?php echo $criteria['percentage']; ?>' id='percentage' name='percentage' /></td>
		</tr>
		<tr>
			<td><label for='event'>Event</label></td>
			<td><input type='text' value='<?php echo $criteria['event']; ?>' id='event' name='event' /></td>
		</tr>
	</table>
	<input type="submit" name="" value="Edit Criteria" />
	<input type='hidden' id='id' name='id' value=<?php echo $id ?> />
</form>