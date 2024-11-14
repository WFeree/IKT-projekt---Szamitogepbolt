<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title><?= $title ?? "PCPartPicker" ?></title>

    <?php foreach($cssfiles ?? [] as $file): ?>
        <link rel="stylesheet" href="<?= $file ?>.css">
    <?php endforeach; ?>

</head>
<body>
<nav>navbar</nav>