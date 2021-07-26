<?php

	$dbhost = "localhost";
	$dbuser = "id16657933_admin_wallergy";
	$dbpass = "rrjZWif5oxc\k*W0";
	$dbname = "id16657933_wallergy";
	try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $error) {
        die("Error conexión BBDD " . $error->getMessage());
    }
