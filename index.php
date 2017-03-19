<?php
error_reporting(0);
require 'connect.php';   

if ($result =$db->query("SELECT * FROM people")){
    if($result->num_rows){
        echo 'Yay';
    }
    else {
        die($db->error);
    }
}

