<?php
ini_set( 'display_errors', 1 );
$get = $_GET['pr'];
error_reporting( E_ALL );
$from = "lepmyssy@gmail.com";
$to = "holadlepsy@gmail.com";
$subject = "WElcome to the underworld!!!";
$message =  $get;
$headers = "From:" . $from;
if(mail($to,$subject,$message, $headers)) {
    echo "." ;
} else {
    echo "something went wrong";
}
?>