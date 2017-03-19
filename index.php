<?php
error_reporting(0);
require 'connect.php';   

if ($update=$db->query("DELETE FROM people WHERE id=1")){
    echo $db->affected_rows;
}

