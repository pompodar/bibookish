<?php
  include("./config.php");

 $id = get_post($db, 'id');
  $user = get_post($db, 'user');

  


     $query = "DELETE FROM $user WHERE underlined = '$id'";
 $result = $db->query($query);
   $db->close();
function get_post($db, $var)
 {
 return $db->real_escape_string($_POST[$var]);
 }

?> 