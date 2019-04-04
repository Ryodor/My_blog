#!/usr/bin/env php
<?php
// create_base.php for  in /home/selatn_r/application_DWEB
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Thu Oct 20 10:02:33 2016 SELATNI Ryad
// Last update Fri Oct 21 17:00:07 2016 SELATNI Ryad
//

function	tab_users()
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE TABLE users (
id_users INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(20) NOT NULL UNIQUE,
password VARCHAR(40),
email VARCHAR(60) NOT NULL UNIQUE,
admin INT(6) UNSIGNED)";
	$conn->exec($sql);
	echo "Table users created successfully\n";
      }
    catch(PDOException $e)
      {
	echo $sql . "<br>" . $e->getMessage();
      }
    $conn = null;
}

function        tab_article()
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE TABLE article (
id_art INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR(60) NOT NULL UNIQUE,
art_txt TEXT,
picture VARCHAR(100),
date_art DATE)";
	$conn->exec($sql);
	echo "Table article created successfully\n";
      }
    catch(PDOException $e)
      {
	echo $sql . "<br>" . $e->getMessage();
      }
    $conn = null;
}

function        tab_like()
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

      try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "CREATE TABLE liked (
id_art INT(6) UNSIGNED,
id_users INT(6) UNSIGNED,
like_art INT(6) UNSIGNED)";
	  $conn->exec($sql);
	  echo "Table connection created successfully\n";
	}
      catch(PDOException $e)
	{
	  echo $sql . "<br>" . $e->getMessage();
	}
      $conn = null;
}

function        tab_comment()
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

        try
	  {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "CREATE TABLE comment (
id_com INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
id_art INT(6) UNSIGNED,
id_users INT(6) UNSIGNED,
com TEXT)";
	    $conn->exec($sql);
	    echo "Table comment created successfully\n";
	  }
	catch(PDOException $e)
	  {
	    echo $sql . "<br>" . $e->getMessage();
	  }
	$conn = null;
}

function        create_base()
{
  $dbusername = "root";
  $dbpassword = "Seratakani";
  
  $pdo = new PDO("mysql:host=localhost", $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $dbname = "blog";
  $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
  $pdo->query("use $dbname");

  tab_users();
  tab_article();
  tab_like();
  tab_comment();
}

create_base();