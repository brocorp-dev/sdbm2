<?php

class Db {

    private $pdo;
    private $stmt;
    private $parm;

    public function __construct()
    {
        try {

            $this->pdo = new PDO("mysql:host=". DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
                    DB_USER, DB_PASSWORD, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]);
        }
        catch(Exception $e)
        {
            exit($e->getMessage());
        }
    }

    public function __destruct()
    {
            try {
                if($this->stmt != null ) { $this->stmt = null; }; 
            }
            catch(Exception $e)
            {
                return false;
            }
    }

    public function select($sql,$param=null)
   {
       try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($param);
            return $this->stmt->fetchAll();
       }
       catch (Exception $ex) { 
            return false;
       }
   }

   public function insert($sql,$param=null)
   {
       try {
            $this->pdo->prepare($sql)->execute($param);
            return true;
       }
       catch (Exception $ex) { 
            die($ex->getMessage());
       }
   }

}

define("DB_HOST","localhost");
define("DB_NAME","vkomix");
define("DB_CHARSET","utf8");
define("DB_USER","vkomix");
define("DB_PASSWORD","vkomix");

?>