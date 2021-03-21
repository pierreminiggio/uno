<?php

$uri = $_SERVER['REQUEST_URI'];

class Uno {
    public function __construct(
        public string $title,
        public string $description,
        public string $image
    )
    {}
}

$uno = explode('?', $uri)[0] !== '/contre'
    ? new Uno('Uno !', 'J\'suis trop fort c\'est tout', 'uno.png')
    : new Uno('Contre-uno !', 'Tu ne peux pas contrer un contre-uno !', 'contre.png')
;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $uno->title ?></title>
    <meta property="og:title" content="<?= $uno->title ?>">
    <meta property="og:description" content="<?= $uno->description ?>">
    <meta property="og:image" content="<?= $uno->image ?>">
</head>
<body>
    <h1><?= $uno->title ?></h1>
    <img src="<?= $uno->image ?>" alt="<?= $uno->title ?>">
    <p><?= $uno->description ?></p>
</body>
</html>