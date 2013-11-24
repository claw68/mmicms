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
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/score/doEdit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='desc'>Description</label></td>
			<td><input type='text' value='<?php echo $score['desc']?>' id='desc' name='desc' /></td>
		</tr>
	</table>
	<input type="submit" name="" value="Edit Score" />
	<input type='hidden' id='id' name='id' value=<?php echo $id ?> />
</form>