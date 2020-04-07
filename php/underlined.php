<?php
  include("./config.php");

  $id = get_post($db, 'id');
    $book = get_post($db, 'book');
        $user = get_post($db, 'user');




     $query = "INSERT INTO $user (underlined , book)
 VALUES ('$id', '$book')";
 $result = $db->query($query);
   $db->close();
function get_post($db, $var)
 {
 return $db->real_escape_string($_POST[$var]);
 }

?> 