#!/usr/bin/env php
<?php
// empy_table.php for  in /home/selatn_r/application_DWEB
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Thu Oct 20 18:03:50 2016 SELATNI Ryad
// Last update Thu Oct 20 19:42:17 2016 SELATNI Ryad
//

function        del_in_users($log)
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM users WHERE login = \"$log\"";
	$conn->exec($sql);
	      echo "Users deleted successfully\n";
      }
    catch(PDOException $e)
      {
	echo $sql . "<br>" . $e->getMessage();
      }
    $conn = null;
}

del_in_users($argv[1]);