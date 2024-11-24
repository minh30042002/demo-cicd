<?php
require_once '../src/functions.php';

$name = $_GET['name'] ?? 'Guest';
$message = greetUser($name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
</head>
<body>
    <h1>Xin chao , T1 da thang cktg</h1>
    <p><?php echo $message; ?></p>
</body>
</html>
