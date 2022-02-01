<?php 
// DB credentials.
define('DB_HOST','eu-cdbr-west-02.cleardb.net');
define('DB_USER','bcc4a9e81942f6');
define('DB_PASS','f500a188');
define('DB_NAME','heroku_6deca962ec43279');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>