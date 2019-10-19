<?php

class DBconn
{
   private $dbhost = 'localhost';
   private $dbuser = 'root';
   private $dbpass = '';
   private $dbname = 'blog';

   public function connect()
   {
      $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

      if ($conn->connect_error) {
         exit('Error connectiong to the database: ' . $conn->connect_errno . ' ' . $conn->connect_error . '<br>');
      }

      return $conn;
   }
}
