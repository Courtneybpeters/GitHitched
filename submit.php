<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 error_reporting(E_ALL);
ini_set('display_errors', '1');

//$errors = '';
//$myemail = 'luke@paireepinart.com';//<-----Put Your email address here.
//if(empty($_POST['name'])  || 
//   empty($_POST['guests']) || 
//   empty($_POST['food']))
//{
//    echo "Whoops! please fill out required fields. click <a href="/">here</a> to go back and try again.";
//}
 
$name = isset($_POST['name']) ? $_POST['name'] : 'No Name'; 
$guests =  isset($_POST['guests']) ? $_POST['guests'] : 'No Guests'; 
$food = isset($_POST['food']) ? $_POST['food'] : 'No Food'; 
$comments = isset($_POST['comments']) ? $_POST['comments'] : 'No Comments'; 
 
echo $name;

echo $guests;

echo $food;

echo $comments;

echo "HERE!";

//if( empty($errors))
//{
//$email_subject = "Wedding form submission: $name";
 /*
$email_body = "-----------------\nYou have received a new response to your invitation!\n\n".
"Here are the details:\n".
"    Name: $name\n".
"    Guests: $guests\n".
"    Food: $food\n".
"    Comments: $comments\n-------------\n";*/
 //echo "$_SERVER['DOCUMENT_ROOT']/responses.txt";
 //file_put_contents("$_SERVER['DOCUMENT_ROOT']/responses.txt", $email_body, FILE_APPEND);
//$headers = "From: $myemail\n";
 
//$headers .= "Reply-To: $email_address";
 
//mail($to,$email_subject,$email_body,$headers);
 
//redirect to the 'thank you' page
 
//header('Location: thanks.html');
//}
 ?> 
 </body>
</html>