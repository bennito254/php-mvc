<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PHP MVC</title>

   <!-- App icons -->
   <link rel="shortcut icon" href="./favico.png" type="img/png">
   <link rel="icon" href="./favico.png" type="img/png">

   <!-- Stylesheets -->
   <link rel="stylesheet" href="http://localhost:3001/css/styles.css?id=<?php echo rand(0, 1000); ?>">

</head>

<body>

   <h1>Hello world!</h1>

   <?php

   require_once '../app/init.php';

   $app = new App();

   ?>

   <!-- Scripts -->
   <script src="./js/main.js"></script>

</body>

</html>