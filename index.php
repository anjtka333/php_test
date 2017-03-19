<?php
error_reporting(0);
require 'connect.php';   

if ($update=$db->query("UPDATE people SET created = NOW()")){
    echo $db->affected_rows;
}

