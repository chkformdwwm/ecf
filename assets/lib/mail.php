<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $retour = mail('chkipmemoire@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], '');
    if ($retour)
        echo '<p>Votre message a bien été envoyé</p>';
    ?>

</body>

</html>