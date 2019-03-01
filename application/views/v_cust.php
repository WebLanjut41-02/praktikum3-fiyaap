<!DOCTYPE html>
<html>
<head>
	<title>Pemesan Makanan</title>
</head>
<body>
	<h1>Welcome to FyKitch!</h1>
	<h2>Kepuasan anda adalah motivasi bagi kami..</h2>
	<center>
		<form action="<?php base_url(); ?>fykitch/inputcust">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nmcus"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td>No Hp</td>
					<td>:</td>
					<td><input type="text" name="nhpcus"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Kirim"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>