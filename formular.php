<?php
$submit = filter_input(INPUT_POST, 'submit');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP1-14</title>
</head>
<body>
    
<form action="formular.php" method="post">
<?php
if ((isset($submit))) { ?>
    <p>Formulář byl odeslán</p>
    <p>Email : <?=$email?></p>
    <p>pohlaví : <?=$gender?></p> <?php }  
 else { ?>
<p>stránka byla načtena bez odeslaného formuláře</p>
<label for="email">E-mail</label>
<input type="email" name="email" id="email">

<h2>Pohlaví</h2>
<label for="gender">Gender :</label>

<label for="gender-male">Muž</label>
<input type="radio" name="gender" value="male" id="gender-male">

<label for="gender-female">Žena</label>
<input type="radio" name="gender" value="female" id="gender-female">

<label for="gender-none">non-specific</label>
<input type="radio" name="gender" value="none" id="gender-none">

<input type="submit" name="submit" value="Přidat do databáze">
<?php }; ?>


</form>

</body>
</html>