<script>
function validate()
{
	var message  ="";
	
	if($('#name').val() == '' || $('#name').val() == null)
	{
		message += 'Name should have a value\n';
	}
	
	if($('#enable').val() == '' || $('#enable').val() == null)
	{
		message += 'Enable should have a value\n';
	}
	
	if($('#show').val() == '' || $('#show').val() == null)
	{
		message += 'Show should have a value\n';
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
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/event/doAdd" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='name'>Name</label></td>
			<td><input type='text' value='' id='name' name='name' /></td>
		</tr>
		<tr>
			<td><label for='enable'>Enable</label></td>
			<td><input type='text' value='' id='enable' name='enable' /></td>
		</tr>
		<tr>
			<td><label for='show'>Show</label></td>
			<td><input type='text' value='' id='show' name='show' /></td>
		</tr>
	</table>
	<input type="submit" name="" value="Add Event"  />
</form>