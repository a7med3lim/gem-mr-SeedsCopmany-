<?php
$to = "ahmed.ali@infasme.com";
$subject = "this is a text";
$message = "test local host to send mail";
$header = "From:Test@test.com";
$time = time();
mail($to,$subject,$message,$header);
print "script run $time";
?>