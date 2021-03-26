
<?php

session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Formulaire html
</title>
<style>
form{
    marj
}

</style>
</head>
<body>
<form action="traitement.php" method="POST">
Votre nom :<input type="text" name="nom"><br>
Votre âge :<input type="text" name="age"><br>
Votre email :<input type="text" name="email"><br>
Votre tél :<input type="text" name="tél">
<p>
<input type=submit value="Envoyer">
</form>


</body>
</html>