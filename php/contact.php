/* <?php
//git add .
//git commit -m [message]
//git push origin update:master
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

$headers = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  //
 mail( "gongchatampa@gmail.com", $_POST['subject'], $_POST['message'], $headers );
 echo "Thank you";

}
?>
*/

<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
// if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
 
//   // detect & prevent header injections
//   $test = "/(content-type|bcc:|cc:|to:)/i";
//   foreach ( $_POST as $key => $val ) {
//     if ( preg_match( $test, $val ) ) {
//       exit;
//     }
//   }

// $headers = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
//     'Reply-To: ' . $_POST["email"] . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$EmailTo = "gongchatampa@gmail.com";
$Subject = $_POST['subject'];

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";


//send email
//$success = mail( $EmailTo, $_POST['subject'], $_POST['message'], $headers );

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

if ($success){
  echo "sucsess";
}
else
  echo "invalid";

?>
