<!DOCTYPE html>
<html>
  <title>Programmation Web - TP1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <body>

    <h1>Programmation Web - TP1</h1>
<?php

echo '<h1>Hello!</h1>';
print_r($_POST);
?>

    
    <form action="" method="post">
      <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="Nom">
      </div>
      <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname" value="Prénom">
      </div>
      <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
      </div>
      <div>
        <label for="sexe">Sexe :</label>
        <input type="text" id="sexe" name="user_sexe" value="M">
      </div>
      <div>
        <label for="adress">Adresse :</label>
        <input type="text" id="adress" name="user_adress" value="Adresse">
      </div>
      <div>
        <label for="name">Téléphone :</label>
        <input type="text" id="name" name="user_tel" value="téléphone">
      </div>
      <div class="button">
        <button type="submit">Envoyer</button>
      </div>
    </form>
  </body>
</html>

    

    
