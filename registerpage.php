<?php 
session_start();
?>
<!DOCTYPE>
<html>
<head>
</head>
<body>
<h2>Welcome</h2>
<form method="POST">
<label>Enter Username  : </label><input type="text" name="usname"><br><br>
<label>Enter Email  : </label><input type="text" name="email"><br><br>
<label>Enter Phone  : </label><input type="text" name="phone"><br><br>
<label>Enter Password  : </label><input type="password" name="psw"><br><br>
<label>Retype Password : </label><input type="password" name="npsw"><br><br>
<input type="submit" name="register">
</form>
</body>
