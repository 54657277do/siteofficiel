<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nomm=$_POST['nom'] ; $emailm=$_POST['email'] ; $telm=$_POST['tel'] ; $messagem=$_POST['message'] ;

$to = "donatientchehoundje@gmail.com";
$subject = "Nouveau message depuis le site web de 'OEIL DE DIEU' ";
$body = "Nom: $nomm\nEmail: $emailm\nNuméro de téléphone: $telm\nMessage: $messagem";

if (mail($to, $subject, $body)) {
  echo "Le message a été envoyé avec succès.";
} else {
  echo "Une erreur s'est produite lors de l'envoi du message.";
}
}
?>
