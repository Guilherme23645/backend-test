<?php

$data = [
  'username' => $_POST['username'],
  'email' => $_POST['email'],
  'timestamp' => date('Y-m-d H:i:s')
];

$file = 'data.json';

$existingData = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$existingData[] = $data;

file_put_contents($file, json_encode($existingData, JSON_PRETTY_PRINT));

?>