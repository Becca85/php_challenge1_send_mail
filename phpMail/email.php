<!DOCTYPE html>
<html>
<head>
	<title>Challenge 9 Envoi de mail</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/bootstap.css">
</head>
<body class="container-fluid">
<form method="post" action="verificationMail.php">

	<h1>NOUVEAU MESSAGE</h1>
	<div class="email col-md-8 titre">
		<label for="message">E-mail : </label>
	</div>
	<div class="email col-md-8">
		<input type="text" placeholder="Ex : adresse@gmail.com" class="place" name="mail"></input>
	</div>

	<div class="email col-md-8 titre">
		<label for="objet">Objet : </label>
	</div>
	<div class="email col-md-8">
		<input type="text" placeholder="Trop fort!" class="place" name="obj" maxlength="50"></input>
	</div>
	
	<div class="message col-md-8 titre">
        <label for="message">Message :</label>
    </div>
    <div class="message col-md-8">
        <textarea id="message" placeholder="Ecrire votre message" rows="20" cols="90" maxlength="500" name="msg"></textarea>
    </div>
    <div class="envoyer col-md-8">
	<input type="submit" value="envoyer" class="placebtn"></input>
	</div>

	<div>
     <input id="input-repl-2" type="file" class="file-loading" accept="image/*">
    </div>

</form>

</body>
</html>