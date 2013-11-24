<script>
	$(function(){
		$("#wrapper").hide();
	});
</script>
<div id="login" title="Login">
	<form action="user/login_action" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" id="username" name="username" autocomplete="off" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" id="password" name="password" /></td>
			</tr>
		</table>
	</form>
</div>