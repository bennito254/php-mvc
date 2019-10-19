<?php

class Model
{
   protected function connect()
   {
      require_once __DIR__ . '/../config/DBconn.php';

      $connect = new DBconn();
      $conn = $connect->connect();

      return $conn;
   }
}
