<?php
namespace project\db;

class Database
{
    private static $user = 'soundly';
    private static $password = 'GU7M{]jaQe=q';
    private static $dsn = 'mysql:host=localhost;dbname=soundly';
    private static $dbconn;


    public function __construct()
    {
    }

    public static function getDb(){
        if(!isset(self::$dbconn)){
            try {
                self::$dbconn = new \PDO(self::$dsn,self::$user,self::$password);

            }catch (\PDOException $e){
                $msg = $e->getMessage();
                exit();
            }
        }
        return self::$dbconn;
    }

}
