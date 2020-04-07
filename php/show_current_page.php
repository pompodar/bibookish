<?php
  include("./config.php");

     $current_page = get_post($db, 'current_page');



     $query = "SELECT * FROM $current_page";

 $result = $db->query($query);
if (!$result) die ("newbase access failed: " . $connection->error);
 $row = $result->num_rows;
 
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = $result->fetch_array(MYSQLI_NUM);
 $comments[$j] = $row[0];
 }
echo $comments[0];
$data = array();
while ($rows = mysqli_fetch_object($result))
{
    array_push($data, $rows);
}
echo json_encode($data);

 
 echo <<<_END
 
_END;

   $db->close();
function get_post($db, $var)
 {
 return $db->real_escape_string($_POST[$var]);
 }

?> 