<?php
  include("./config.php");

 $page = get_post($db, 'page');
   $current_page = get_post($db, 'current_page');



     $query = "DELETE FROM $current_page";
          $query1 = "INSERT INTO $current_page (page)
 VALUES ('$page')";
 $result = $db->query($query);
  $result1 = $db->query($query1);

   $db->close();
function get_post($db, $var)
 {
 return $db->real_escape_string($_POST[$var]);
 }

?> 