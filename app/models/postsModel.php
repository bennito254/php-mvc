<?php

class postsModel extends Model
{
   protected $id;
   protected $title;
   protected $tags;
   protected $body;
   protected $author_avatar;
   protected $author_name;
   protected $date_created;
   protected $date_updated;

   public function __construct()
   {
      $this->createTable();
   }

   private function createTable()
   {
      $query = "CREATE TABLE IF NOT EXISTS `posts`(
            `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `title` VARCHAR(100) NOT NULL,
            `tags` TEXT NOT NULL,
            `body` VARCHAR(500) NOT NULL,
            `author_avatar` VARCHAR(100) NOT NULL,
            `author_name` VARCHAR(60) NOT NULL,
            `date_created` DATETIME NOT NULL,
            `date_updated` DATETIME NOT NULL
         )";

      if (!$this->connect()->query($query)) {
         exit('Error creating tables: ' . $this->connect()->error . '<br>');
      }
   }

   public function create(
      $title,
      $tags,
      $body,
      $author_avatar,
      $author_name
   ) {
      $query = "INSERT INTO `posts`(
            title,
            tags,
            body,
            author_avatar,
            author_name,
            date_created,
            date_updated)
         VALUES(
            '$title',
            '$tags',
            '$body',
            '$author_avatar',
            '$author_name',
            CURRENT_TIMESTAMP,
            CURRENT_TIMESTAMP)";

      if (!$this->connect()->query($query)) {
         exit('Error inserting the post: ' . $this->connect()->error . '<br>');
      }
   }

   public function read()
   {
      $query = "SELECT * FROM `posts`";
      $results = $this->connect()->query($query);

      if (!$results) {
         exit('Error fetching posts: ' . $this->connect()->error . '<br>');
      }

      return $results;
   }

   public function update()
   { }

   public function delete()
   { }
}
