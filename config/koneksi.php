<?php
return [
    'servername' => 'localhost',
    'username' => 'user',
    'password' => '',
    'dbname' => 'table_user',
];

// Create connection
$conn = mysqli_connect($config['localhost'], $config['root'], $config[''], $config['table_user']);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
