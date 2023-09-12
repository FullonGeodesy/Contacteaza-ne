<?php

$nume = $_POST['nume'];
$email = $_POST['email'];
$suprafata (mp) = $_POST['suprafata (mp)'];
$mesaj = $_POST['mesaj'];

$mailheader = "From:".$nume."<".$email.">\r\n";

$recipient = "fullongeodesy@gmail.com";

mail($recipient, $suprafata (mp), $mesaj, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nume="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Vă mulţumim că ne-aţi contactat. Vom reveni la tine cât mai curând posibil!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>
