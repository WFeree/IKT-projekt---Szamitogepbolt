<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "PC Part Picker" ?></title>
    <?php foreach($cssfiles as $cssfile): ?>
        <link rel="stylesheet" href="/css/<?= $cssfile; ?>.css">
    <?php endforeach; ?>
</head>
<body>