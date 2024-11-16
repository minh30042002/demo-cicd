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
    <h1>Welcome! t1 fighting</h1>
=======
    <h1>Welcome! Love you all hahahaha</h1>
>>>>>>> 4c0d32373faf93683911c47a9eead75df96d1438
    <p><?php echo $message; ?></p>
</body>
</html>
