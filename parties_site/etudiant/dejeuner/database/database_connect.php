<?php
if($_SERVER['HTTP_HOST'] == 'localhost')
{
	define('USER', 'root');
	define('PASSWORD', '');
	define('DBNAME', 'articles');
	define('HOST', 'localhost');
} else {
	define('USER', 'kartelfritvayken');
	define('PASSWORD', 'Vayken1956');
	define('DBNAME', 'kartelfritvayken');
	define('HOST', 'kartelfritvayken.mysql.db');
	
}
try
{
	$bdd = new PDO('mysql:host='. HOST .';dbname='.DBNAME, USER, PASSWORD);
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

function format($line){
	return htmlspecialchars($line);
}
?>