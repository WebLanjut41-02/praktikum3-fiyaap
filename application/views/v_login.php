<!DOCTYPE html>
<html>
<head>
	<title>Pesan Makanan</title>
</head>
<body>
	<center>
		<form action="<?php base_url(); ?>Login/masuk">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="names"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>		
		</form>
	</center>
</body>
</html>