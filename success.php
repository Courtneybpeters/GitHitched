<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
$errors = '';
$myemail = 'luke@paireepinart.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['guests']) || 
   empty($_POST['food']))
{
    echo "Whoops! please fill out required fields. click <a href="/">here</a> to go back and try again.";
}
 
$name = $_POST['name']; 
$guests = $_POST['guests']; 
$food = $_POST['food']; 
$comments = $_POST['comments']; 
 
if( empty($errors))
{
 
$to = $myemail;
 
$email_subject = "Wedding form submission: $name";
 
$email_body = "You have received a new response to your invitation!\n\n".
"Here are the details:\n".
"    Name: $name\n".
"    Guests: $guests\n".
"    Food: $food\n".
"    Comments: $comments\n";
 
$headers = "From: $myemail\n";
 
//$headers .= "Reply-To: $email_address";
 
mail($to,$email_subject,$email_body,$headers);
 
//redirect to the 'thank you' page
 
header('Location: thanks.html');
}
 ?> 
 </body>
</html>