<?php
 include("./config.php");

  $user = get_post($db, 'user');
  $password = get_post($db, 'password');


 $query = "INSERT INTO users (name, password)
 VALUES ('$user', '$password')";
 $result = $db->query($query);


$sql = "CREATE TABLE `$user` (
  
  `id` int NOT NULL AUTO_INCREMENT,
  `underlined` int,
  `engl`  varchar(255),
`ukr` varchar(255),
`book` varchar(255),    
  `date`  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
)";

if ($db->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $db->error;
}

   $db->close();
function get_post($db, $var)
 {
 return $db->real_escape_string($_POST[$var]);
 }

?>
