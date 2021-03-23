<?php 
$to = "horia.imperial@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$subject = "Form submission";
$subject2 = "Vous avez rejoint la newsletter Chill'n'Stream !";
$message =  $from . " just subscribed for your Newsletter" ;
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//Headers
$headers .= "From: <".$from. ">"; 
$headers2 = "From:" . $to;
if(isset($_POST['submit'])){    
mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
echo "Vous avez rejoint la super coloc de Chill'n'Stream, merci pour votre soutien !";
// You can also use header('Location: thank_you.php'); to redirect to another page.
// You cannot use header and echo together. It's one or the other.
} ?>