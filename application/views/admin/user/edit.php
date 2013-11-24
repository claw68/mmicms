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
<form onSubmit='return validate()' action="<?php echo site_url()?>admin/user/doEdit" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<table>
		<tr>
			<td><label for='username'>Username</label></td>
			<td><input type='text' value='<?php echo $user['username']; ?>' id='username' name='username' /></td>
		</tr>
		<tr>
			<td><label for='password'>Password</label></td>
			<td><input type='text' value='<?php echo $user['password']; ?>' id='password' name='password' /></td>
		</tr>
		<tr>
			<td><label for='alias'>Alias</label></td>
			<td><input type='text' value='<?php echo $user['alias']; ?>' id='alias' name='alias' /></td>
		</tr>
		<tr>
			<td><label for='name'>Name</label></td>
			<td><input type='text' value='<?php echo $user['name']; ?>' id='name' name='name' /></td>
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
				<script>
					$(function(){
						$("#role").val("<?php echo $user['role']; ?>");
					})
				</script>
			</td>
		</tr>
	</table>
	<input type="submit" name="" value="Edit User" />
	<input type='hidden' id='id' name='id' value=<?php echo $id ?> />
</form>