<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nomm=$_POST['nom'] ; $agem=$_POST['age'] ; $telm=$_POST['tel'] ; $classem=$_POST['classe'] ;

$to = "donatientchehoundje@gmail.com";
$subject = "Nouveau message depuis le site web de 'OEIL DE DIEU' ";
$body = "NOM: $nomm\nAGE: $agem\nNUMERO DE TELEPHONE: $telm\nCLASSE: $classem";

if (mail($to, $subject, $body)) {
  echo "L'inscription a été effectué avec succès.";
} else {
  echo "Une erreur s'est produite lors de l'envoi du message.";
}
}
?>