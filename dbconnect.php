<?php  
$mysqli = new mysqli("http://127.0.0.1/line-bot-exam-php-6-master/webhooks.php", "root","","arduino");  
/* check connection */
if ($mysqli->connect_errno) {  
    printf("Connect failed: %s\n", $mysqli->connect_error);  
    exit();  
}  
if(!$mysqli->set_charset("utf8")) {  
    printf("Error loading character set utf8: %s\n", $mysqli->error);  
    exit();  
}
