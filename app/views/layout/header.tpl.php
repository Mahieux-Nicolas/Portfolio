<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="<?=$viewData['baseUri']?>/../public/assets/css/style.css" rel="stylesheet">

    <link href="<?=$viewData['baseUri']?>/../public/assets/css/cv.css" rel="stylesheet">

</head>

<body>


        <script src="<?=$viewData['baseUri']?>/../public/assets/js/navigation.js" defer> </script>
        <form class="form">

<form action="" method="get" class="forms">
  <div class="element__form">
    <label for="nom">Nom: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="element__form">
    <label for="prenom">Prénom: </label>
    <input type="text" name="prenom" id="prenom" required>
  </div>
  <div class="element__form">
    <label for="societe">Société: </label>
    <input type="text" name="societe" id="societe" required>
  </div>
  <div class="element__form">
    <label for="email">email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <p class="element__form">
       <label for="message">Votre message</label>
       <textarea name="message" id="message"></textarea>
   </p>
  <div class="element__form">
    <input type="submit"id="boutton" value="Envoyer">
  </div>
</form>


