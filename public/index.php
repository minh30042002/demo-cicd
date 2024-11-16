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
<<<<<<< HEAD
    <h1>Welcome! T1 champion </h1>
=======
    <h1>Welcome! t1 fighting</h1>
>>>>>>> 19e3cc45f2f9aa21c0ced0af3c5bbf6bb095d4e6
    <p><?php echo $message; ?></p>
</body>
</html>
