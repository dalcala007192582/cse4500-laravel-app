<?php

// Read the JSON file
$json_file = file_get_contents('events-feed.JSON');

// Decode the JSON file
$json_data = json_decode($json_file,true);

return $json_data
?>