<?php
  if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $societe = $_POST['societe'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
    if (empty($name)) {
        $errors[] = 'Merci de remplir votre nom';
    }
    if (empty($prenom)) {
        $errors[] = 'Merci de remplir votre prénom';
    }
    if (empty($societe)) {
        $errors[] = 'Merci de remplir votre société';
    }
 
    if (empty($email)) {
        $errors[] = 'Merci de remplir votre Email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'votre email est invalide';
    }
 
    if (empty($message)) {
        $errors[] = 'Merci de saisir votre message';
    }
 }

?>
