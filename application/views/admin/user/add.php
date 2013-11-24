<script>
function validate()
{
	var message  ="";
	
	if($('#username').val() == '' || $('#username').val() == null)
	{
		message += 'Username should have a value\n';
	}
	
	if($('#password').val() == '' || $('#password').val() == null)
	{
		message += 'Password should have a value\n';
	}
	
	if($('#alias').val() == '' || $('#alias').val() == null)
	{
		message += 'Alias should have a value\n';
	}
	
	if($('#name').val() == '' || $('#name').val() == null)
	{
		message += 'Name should have a value\n';
	}
	
	if($('#role').val() == '' || $('#role').val() == null)
	{
		message += 'Role should have a value\n';
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
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/user/doAdd" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='username'>Username</label></td>
			<td><input type='text' value='' id='username' name='username' /></td>
		</tr>
		<tr>
			<td><label for='password'>Password</label></td>
			<td><input type='text' value='' id='password' name='password' /></td>
		</tr>
		<tr>
			<td><label for='alias'>Alias</label></td>
			<td><input type='text' value='' id='alias' name='alias' /></td>
		</tr>
		<tr>
			<td><label for='name'>Name</label></td>
			<td><input type='text' value='' id='name' name='name' /></td>
		</tr>
		<tr>
			<td><label for='role'>Role</label></td>
			<td>
				<select name="role" id="role">
					<option value=""></option>
					<option value="Administrator">Administrator</option>
					<option value="Judge">Judge</option>
					<option value="Tabulator">Tabulator</option>
				</select>
			</td>
		</tr>
	</table>
	<input type="submit" name="" value="Add User" />
</form>