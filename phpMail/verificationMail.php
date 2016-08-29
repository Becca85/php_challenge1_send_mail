<?php
$to = $_POST['mail'];// le champs de l'e-mail à entrer
$subject = $_POST['obj']; // l'objet de l'e-mail
$message = $_POST['msg']; // la zone de texte du message
$headers = 'From: rebeccamaccio@codeacademie.com' . "\r\n" . // mail de l'expediteur
    'Reply-To: rebeccamaccio@codeacademie.com' . "\r\n" . // mail pour répondre
    'X-Mailer: PHP/' . phpversion(); // je cherche encore :slightly_smiling_face:mail($to, $subject, $message, $headers);
mail($to, $subject, $message,$headers);
echo "Votre message a bien été envoyé à $to";



/*
1er essaie qui fonctionne :-)
$destinataire = $_POST['mail'];;
$subject = $_POST['obj']; // l'objet de l'e-mail
$message = $_POST['msg']; // la zone de texte du message
echo "Ce script envoie un mail à $destinataire";
mail($destinataire, $subject, $message);

tentative pour limiter le nombre de caratère a 500
substr($message, 0, 500);

*/

?>