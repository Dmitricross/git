<?php

//Getting the message from address

$my_message = $_GET["message"];
$to = $_GET["to"];

echo "My message is ".$my_message;" and is to ".$to; " and is to ".$from;






?>

<h2> First application </h2>

<form method="get">
<label for="message">Message:*<label><br>
<input type="text" name="message"><br><br>

<label for="from">from<label><br>
<input type="text" name="from"><br><br>


<label for="to">To<label><br>
<input type="text" name="to"><br><br>
<!--This is the save button -->
<input type="submit" value="Save to DB"



<form>