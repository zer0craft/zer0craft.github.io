<?php

//Admin Login

$alogin = 'sa';

//Admin Password

$apass = '12345';

//Database Name

$db = 'MuOnline';

//Variables

$ip = "192.168.1.95";

//Host. IP If working remotely

$host = '192.168.1.95';

//Title that will appear on all pages.

$title = 'Registration';

//Server Name

$srvname = 'Registration'; 

//Credits

$credits = 'Simple Registration Page';

//Database Connection

$msconnect=mssql_connect("$host","$alogin","$apass");
$msdb=mssql_select_db("$db",$msconnect);

?>