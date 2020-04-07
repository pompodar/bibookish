<?php
  include("./config.php");

    $user = get_post($db, 'user');



     $query = "SELECT * FROM $user WHERE underlined IS NOT NULL";
 $result = $db->query($query);

if (!$result) die ("newbase access failed: " . $connection->error);
 $row = $result->num_rows;
 
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 //$result->new_seek($j);
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