<?php

class Database
{
   private $dbhost = "localhost",
      $dbname = "spp_ukk",
      $dbusername = "root",
      $dbpassword = "";

   private $dbh;
   private $stmt;

   public function __construct()
   {
      $dsn = "mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname;

      try {
         $this->dbh = new PDO($dsn, $this->dbusername, $this->dbpassword);
      } catch (Exception $e) {
         die($e->getMessage());
      }
   }

   public function query($query)
   {
      $this->stmt = $this->dbh->prepare($query);
   }

   public function bind($param, $value, $type = null)
   {
      if (is_null($type)) {
         switch (true) {
            case is_int($value):
               $type = PDO::PARAM_INT;
               break;
            case is_null($value):
               $type = PDO::PARAM_NULL;
               break;
            case is_bool($value):
               $type = PDO::PARAM_BOOL;
               break;
            default:
               $type = PDO::PARAM_STR;
         }
      }

      $this->stmt->bindValue($param, $value, $type);
   }

   public function execute()
   {
      $this->stmt->execute();
   }

   public function resultAll()
   {
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }

   public function resultSingle()
   {
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_ASSOC);
   }
   public function rowCount()
   {
      return $this->stmt->rowCount();
   }

   public function getLastId()
   {
      $this->execute();
      return $this->dbh->lastInsertId();
   }
}
