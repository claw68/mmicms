<script>
function validate()
{
	var message  ="";
	
	if($('#name').val() == '' || $('#name').val() == null)
	{
		message += 'Name should have a value\n';
	}
	
	if($('#number').val() == '' || $('#number').val() == null)
	{
		message += 'Number should have a value\n';
	}
	
	if($('#gender').val() == '' || $('#gender').val() == null)
	{
		message += 'Gender should have a value\n';
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
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/contestant/doAdd" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='name'>Name</label></td>
			<td><input type='text' value='' id='name' name='name' /></td>
		</tr>
		<tr>
			<td><label for='number'>Number</label></td>
			<td><input type='text' value='' id='number' name='number' /></td>
			<script>
				$(function() {
				    $("#number").keydown(function(event) {
				        // Allow: backspace, delete, tab, escape, and enter
				        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
				             // Allow: Ctrl+A
				            (event.keyCode == 65 && event.ctrlKey === true) || 
				             // Allow: home, end, left, right
				            (event.keyCode >= 35 && event.keyCode <= 39)) {
				                 // let it happen, don't do anything
				                 return;
				        }
				        else {
				            // Ensure that it is a number and stop the keypress
				            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
				                event.preventDefault(); 
				            }   
				        }
				    });
				});
			</script>
		</tr>
		<tr>
			<td><label for='gender'>Gender</label></td>
			<td>
				<select id="gender" name="gender">
					<option value=""></option>
					<option value="m">Male</option>
					<option value="f">Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for='picture'>Picture</label></td>
			<td><input type='file' id='picture' name='picture' /></td>
		</tr>
		<tr>
			<td><label for='thumbnail'>Thumbnail</label></td>
			<td><input type='file' id='thumbnail' name='thumbnail' /></td>
		</tr>
	</table>
	<input type="submit" name="" value="Add Contestant"  />
</form>