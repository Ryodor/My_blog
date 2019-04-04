<?php
// fill_table.php for  in /home/selatn_r/application_DWEB
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Thu Oct 20 15:27:53 2016 SELATNI Ryad
// Last update Fri Oct 21 17:49:12 2016 SELATNI Ryad
//

function        add_in_users($log,$pass,$mail)
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

  try
    {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO users (id_users, login, password, email, admin)
    VALUES ('','$log', '$pass', '$mail', '')";
      $conn->exec($sql);
      echo "New users created successfully\n";
    }
  catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }
  $conn = null;
}

function        add_in_article($title,$txt,$pic)
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO article (id_art, titre, art_txt, picture,date_art)
VALUES ('','$title', '$txt', '$pic', NOW())";
	$conn->exec($sql);
	echo "New users created successfully\n";
      }
    catch(PDOException $e)
      {
	echo $sql . "<br>" . $e->getMessage();
      }
    $conn = null;
}

function        add_in_comment($coms)
{
  $servername = "localhost";
  $username = "root";
  $password = "Seratakani";
  $dbname = "blog";

      try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "INSERT INTO comment (id_com, id_users, id_art, com)
VALUES ('','','', '$coms')";
	  $conn->exec($sql);
	  echo "New users created successfully\n";
	}
      catch(PDOException $e)
	{
	  echo $sql . "<br>" . $e->getMessage();
	}
      $conn = null;
}
