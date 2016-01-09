<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = isset($_POST['name']) ? $_POST['name'] : 'No Name'; 
$guests =  isset($_POST['guests']) ? $_POST['guests'] : 'No Guests'; 
$food = isset($_POST['food']) ? $_POST['food'] : 'No Food'; 
$comments = isset($_POST['comments']) ? $_POST['comments'] : 'No Comments'; 
 
// echo $name;
// echo $guests;
// echo $food;
// echo $comments;
// echo "HERE!";
$information = "-----------------\nYou have received a new response to your invitation!\n\n".
"Here are the details:\n".
"    Name: $name\n".
"    Guests: $guests\n".
"    Food: $food\n".
"    Comments: $comments\n-------------\n";
$docRoot = $_SERVER['DOCUMENT_ROOT'];
file_put_contents($docRoot."/responses.txt", $information, FILE_APPEND);

//redirect to the 'thank you' page
header('Location: thanks.html');

 ?> 
 </body>
</html>