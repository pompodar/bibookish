<?php
  include("./config.php");

  $engl = get_post($db, 'engl');
  $transl = get_post($db, 'transl');
  $user = get_post($db, 'user');
  $book = get_post($db, 'book');
  


     $query = "INSERT INTO $user (engl, ukr, book)
 VALUES ('$engl', '$transl', '$book')";
 $result = $db->query($query);
   $db->close();
function get_post($db, $var)
 {
 return $db->real_escape_string($_POST[$var]);
 }

?> 