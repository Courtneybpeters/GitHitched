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
$brunch = isset($_POST['brunch']) ? $_POST['brunch'] : 'Not Attending';
$superbowl = isset($_POST['superbowl']) ? $_POST['superbowl'] : 'Not Attending';
$information = "You have received a new response to your invitation!\r\n\r\n".
"Here are the details:\r\n".
"    Name: $name\r\n".
"    Food: $food\r\n".
"    Comments: $comments\r\n".
"    Guests: $guests\r\n".
"    Brunch: $brunch\r\n".
"    Super Bowl: $superbowl\r\n---------------------\r\n";
$docRoot = $_SERVER['DOCUMENT_ROOT'];
file_put_contents($docRoot."/responses.txt", $information, FILE_APPEND);

$csvFile = fopen("responses.csv", "a");
fputcsv($csvFile, [$name, $food, $comments, $guests, $brunch, $superbowl]);
fclose($csvFile);

//redirect to the 'thank you' page
header('Location: thanks.html');

 ?> 
 </body>
</html>