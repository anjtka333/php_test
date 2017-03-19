<?php
$db =new mysqli('127.0.0.1', 'root', '', 'appc');
//check is database scssesfuly connected
echo $db->connect_errno;