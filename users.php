<?php
$users = [
    'Soso',
    'Lolo',
    'Toto',
    'Mimi',
    'Zizi',
    'Koka',
    'Mickey',
    'Donald'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
</head>

<body>

    <h1>All Uers</h1>

    <?php

    foreach ($users as $user)
        include './resources/views/components/card.php';

    echo 'Users list completed';
    ?>
</body>

</html>