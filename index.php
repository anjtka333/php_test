<?php
error_reporting(0);
require 'connect.php';   

if ($result =$db->query("SELECT * FROM people")){
    if($count=$result->num_rows){
       echo '<p>', $count, '</p>';
        $rows = $result->fetch_all(MYSQL_ASSOC);
        
        echo '<pre>', print_r($rows), '</pre>';
        
        
    }
    
}

