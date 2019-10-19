<?php

class Controller
{

   public function model($model)
   {
      if (file_exists(__DIR__ . '/../models/' . $model . '.php')) {
         require_once __DIR__ . '/../models/' . $model . '.php';
      } else {
         exit('The streamed directory does not exist.');
      }

      return new $model;
   }

   public function view($view, $data = [])
   {
      if (file_exists(__DIR__ . '/../views/' . $view . '.php')) {
         require_once __DIR__ . '/../views/' . $view . '.php';
      } else {
         exit('The streamed directory does not exist');
      }
   }
}
