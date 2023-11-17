<?php ob_start(); 
//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();
//error_reporting(E_ALL ^ E_DEPRECATED);
    define ('hostname', 'localhost');
    define ('username', 'root');
    define ('password', '');
    define ('dbname', 'organic');
$conn = mysqli_connect(hostname, username, password, dbname) or die("Can not connect with the server.");
error_reporting(0);
//$_SESSION["client_id"]=mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR']);
?>