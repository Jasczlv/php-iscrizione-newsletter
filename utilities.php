<?php 
$email = $_GET['email'] ?? "";
var_dump($email);

// $validator = str_contains($email, "@") && str_contains($email, ".");
// var_dump($validator)

$validator = false;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email address '$email' is considered valid.";
    $validator = true;
} else {
    echo "Email address '$email' is considered invalid.";
}
 var_dump($validator);
?>