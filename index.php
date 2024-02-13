<?php
require(conect.php);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hacker Poulette - formulaire</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<h1>Create profile</h1>
	<form action="create_user.php" method="post">
		<div>
			<label for="fistname">Firstname</label>
			<input type="text" name="firstname" value="" required minlength="2" maxlength="255">
		</div>
		<div>
			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" value="" required minlength="2" maxlength="255">
		</div>
            <label for="email">E-mail adress</label>
			<input type="email" name="email" value="" required minlength="2" maxlength="255">
		
		<div>
			<label for="file">Picture's profile</label>
            <input type="file" name="file" accept="image/png, image/jpeg, .gif" required/>		</div>

		<div>
			<label for="description">Description</label>
			<input type="textarea" name="description" value="" required minlength="2" maxlength="1000">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
