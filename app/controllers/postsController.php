<?php

class postsController extends Controller
{

   protected $model;
   protected $view;

   public function index()
   {
      $this->model = $this->model('postsModel');

      $data = $this->read();

      $this->view = $this->view('posts', $data);
   }

   public function create()
   { }

   public function read()
   {
      $request = new $this->model;
      $results = $request->read();

      if ($results->num_rows > 0) {
         while ($row = $results->fetch_assoc()) {
            $data[] = $row;
         }
      } else {
         exit('No posts yet.');
      }

      return $data;
   }

   public function update()
   { }

   public function delete()
   { }
}
