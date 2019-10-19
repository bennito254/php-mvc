<?php

echo '<h1>Posts page!</h1>';

foreach ($data as $post) {
   echo $post['title'] . '<br><br>' . $post['author_name'] . '<br><br>' . $post['body'] . '<br>';
}
