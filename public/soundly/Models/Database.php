<?php

class Database{

  private static $username = "soundly";
  private static $password = "GU7M{]jaQe=q";
  private static $dbname = "soundly";
  private static $dsn = "mysql:host=localhost;dbname=soundly";
  private static $dbconn;

  //get pdo connection
  public static function getDb()
  {
      if (!isset(self::$dbconn)) {
          try {
              self::$dbconn = new \PDO(self::$dsn, self::$username, self::$password);
          } catch (\PDOException $e) {
              $msg = $e->getMessage();
              echo $msg;
              exit();
          }
      }
      self::$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return self::$dbconn;
  }
}
