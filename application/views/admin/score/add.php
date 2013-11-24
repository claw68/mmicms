<script>
function validate()
{
	var message  ="";
	
	if($('#desc').val() == '' || $('#desc').val() == null)
	{
		message += 'Description should have a value\n';
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
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/score/doAdd" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='desc'>Description</label></td>
			<td><input type='text' value='' id='desc' name='desc' /></td>
		</tr>
	</table>
	<input type="submit" name="" value="Add Score"  />
</form>