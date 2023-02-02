<html>
  <head>
    <title>Form GET</title>
  </head>
  <body>
    <form action="" method="get">
     <label for="POST-name">Nom :</label>
     <input id="POST-name" type="text" name="name">
     <input type="submit" value="Enregistrer">
     </form>

     <div>
       <?php
       if (isset($_GET['name'])){
	 echo 'La variable "name" reçu en GET est: '.$_GET['name'];
       }
       ?>
     </div>
  </body>
</html>

