<?php
$db =new mysqli('127.0.0.1', 'root', '', 'app');
//check is database scssesfuly connected
if ($db->connecy_errno){
    die('Sorry we are having some problems');
}