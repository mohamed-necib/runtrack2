<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->

<form action="index.php" method="post" name="formulaire">

<br/><input type="text" placeholder="username" name="username" value="">
  
<input type="text" placeholder="password" name="password" value="">
  
<input type="submit" value="Envoyer">

</form>

<?php

if($_POST){
  if(($_POST['username'] === 'John' || $_POST['username'] === 'john') && ($_POST['password'] === 'Rambo') || ($_POST['password'] === 'rambo')){
  echo "C'est pas ma guerre";
}else{
  echo "Votre pire cauchemar";
  };
};


?>