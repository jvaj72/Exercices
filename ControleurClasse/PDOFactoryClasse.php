<?php

class PDOFactory
{
  public static function getMysqlConnection()
  {
    $db = new PDO('mysql:host=localhost;dbname=location_logement', 'root'/*,'mysql'*/);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
  }
}