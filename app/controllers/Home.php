<?php

class Home extends Controller
{

   public function index()
   {
      $user = $this->model('User');
      $user->name = 'Emmanuel';
      $user->age = 18;

      $data = ['name' => $user->name, 'age' => $user->age];

      $this->view('index', $data);
   }
}
