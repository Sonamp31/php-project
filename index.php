<?php
declare(strict_types=1);

require __DIR__ . '/src/Greeter.php';

$name = $_GET['name'] ?? 'World';
$greeter = new Greeter();
$message = $greeter->greet($name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello PHP</title>
    <style>
        body { font-family: system-ui, sans-serif; display: grid; place-items: center; min-height: 100vh; margin: 0; background: #f5f5f7; }
        main { text-align: center; }
        h1 { font-size: 3rem; margin-bottom: .5rem; }
        p { color: #555; }
    </style>
</head>
<body>
    <main>
        <h1><?= htmlspecialchars($message) ?></h1>
        <p>Shraddha Wagh</p>
    </main>
</body>
</html>
