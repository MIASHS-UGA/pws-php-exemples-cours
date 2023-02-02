<html>
  <head>
    <title>Form POST</title>
  </head>
  <body>
    <form action="" method="post">
     <label for="POST-name">Nom :</label>
     <input id="POST-name" type="text" name="name">
     <input type="submit" value="Enregistrer">
     </form>
     <div>
       <?php
       if (isset($_POST['name'])){
         echo 'La variable "name" reçu en POST est: '.$_POST['name'];
       }
       ?>
     </div>
  </body>
</html>
