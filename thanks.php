<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p id='Message'>

Merci <?php echo $_POST['userFirstName']; ?> <?php  echo $_POST ['userLastName']; ?> de nous avoir contacté à propos de "<?php echo $_POST["subject"]; ?>" <br>

Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['userEmail']; ?> ou par téléphone au <?php echo $_POST['userPhoneNumber']; ?> dans les plus brefs délais pour traiter votre demande : <br>
<?php echo $_POST['message']; ?>

</p>

</body>
</html>