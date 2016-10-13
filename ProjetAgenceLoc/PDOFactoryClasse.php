<?php

class PDOFactory
{
  public static function getMysqlConnection()
  {
    $db = new PDO('mysql:host=localhost;dbname=agence_loc', 'root', 'mysql');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
  }
}