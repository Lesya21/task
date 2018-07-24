<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "news";

$dsn = "mysql:host=$host;dbname=$database;";

$opt = 
	[
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::ATTR_EMULATE_PREPARES   => false,
    ];

$DBH = new PDO($dsn, $user, $password, $opt);
