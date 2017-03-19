<?php
error_reporting(0);
require 'connect.php';   

if($insert= $db->query(
         "INSERT INTO people(first_name, last_name, bio, created) 
         VALUES ('Alex','Garret', 'I\'m webdew', NOW())"
        )){
    echo $db->affected_rows;
    
}

