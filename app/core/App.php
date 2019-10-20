<?php

class App
{
   private $controller = 'home';
   private $method = 'index';
   private $params = [];

   public function __construct()
   {
      $url = $this->parseUrl();
      
      //Set controller if it exists
      if (isset($url[0]) && $url[0] != '' ) {
          $this->controller = $url[0];
          unset($url[0]);
      }
      
      if (isset($url[1]) && $url[1] != '' ) {
          $this->method = $url[1];
          unset($url[1]);
      }
      
     //Upper case the first character in controller
     $this->controller = ucwords($this->controller);
     
     if (file_exists(__DIR__ . '/../controllers/' . $this->controller . '.php')) {
        
        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;
        
        $this->params = array_values($url);

        call_user_func_array([$this->controller, $this->method], $this->params);
     } else {
        exit('The controller {"'.$this->controller.'"} does not exist.');
     }
      
   }

   public function parseUrl()
   {
      //~ if (isset($_GET['url'])) {
         //~ $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
         //~ return $url;
      //~ }
      
      $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
      
      //remove GET params from the URL
      if (($strpos = strpos($url, '?')) !== false) {
			$url = substr($url, 0, $strpos);
		}
      
      //Remove first slash
      $url = substr($url, 1);
      $url = explode('/', $url);
      
      return $url;
   }
}
