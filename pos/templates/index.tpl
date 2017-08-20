<!DOCTYPE html>

<html>
<head>
	<title>JEJU POS | Jeky Jumansyah Point Of Sales</title>
	<link rel="stylesheet" type="text/css" href="design/css/login.css" media="screen" />
</head>

<body>
	<div id="login">
		{if $code == '1'}
			<span style='color: red; align='center''>Username dan Password tidak ditemukan.</span>
		{/if}
		<h1>LOGIN USER</h1>
		<form method="POST" action="index.php?module=login&act=submit">
		<fieldset id="inputs">
			<input id="username" type="text" name="userName" placeholder="Username" autofocus required>
			<input id="password" type="password" name="userPassword" placeholder="Password" required>
		</fieldset>
		<fieldset id="actions">
			<input type="submit" id="submit" value="Log in">
		</fieldset>
		</form>
	</div>
	<p align="center">Copyright @ Jeky Jumansyah Point of Sale</p>
	<p align="center">{$year} &copy; pandawascript.com</p>

</body>
</html>