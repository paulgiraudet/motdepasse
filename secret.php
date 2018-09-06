<?php
if (isset($_POST['mot_de_passe']) AND htmlspecialchars($_POST['motdepasse'])=='kangourou') {
  echo 'Les codes d"acces de la NASA sont : une_fougère / un_eucalyptus';
}
else{
  echo "intru détecté";
}

?>
