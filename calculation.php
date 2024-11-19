<<<<<<< HEAD
<?php
$ingresos = $_POST['ingresos'];
$alquiler = $_POST['alquiler'];
$comida = $_POST['comida'];
$transporte = $_POST['transporte'];
$entretenimiento = $_POST['entretenimiento'];

$gastos = $alquiler + $comida + $transporte + $entretenimiento;
$diferencia = $ingresos - $gastos;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($ingresos < $gastos): ?>
        <h1>CUIDADO PODRÍAS ESTAR EN BANCA ROTA</h1>
        <h2>Desglose de gastos</h2>
        <ul>
            <li>En alquiler has gastado: <?= $alquiler ?> €</li>
            <li>En comida has gastado: <?= $comida ?> €</li>
            <li>En transporte has gastado: <?= $transporte ?> €</li>
            <li>En entretenimiento has gastado: <?= $entretenimiento ?> €</li>
        </ul>
        <p>Estás gastando un total de <?= $gastos ?> €, lo cual excede tus ingresos.</p>
    <?php else: ?>
        <h1>¡MUY BIEN, SIGUE ASÍ!</h1>
        <h2>Desglose de gastos</h2>
        <ul>
            <li>En alquiler has gastado: <?= $alquiler ?> €</li>
            <li>En comida has gastado: <?= $comida ?> €</li>
            <li>En transporte has gastado: <?= $transporte ?> €</li>
            <li>En entretenimiento has gastado: <?= $entretenimiento ?> €</li>
        </ul>
        <p>Estás gastando un total de <?= $gastos ?> €, ahorrando <?= $diferencia ?> € cada mes. ¡Sigue así!</p>
    <?php endif; ?>
</body>
</html>
=======
<?php
$ingresos = $_POST['ingresos'];
$alquiler = $_POST['alquiler'];
$comida = $_POST['comida'];
$transporte = $_POST['transporte'];
$entretenimiento = $_POST['entretenimiento'];

$gastos = $alquiler + $comida + $transporte + $entretenimiento;
$diferencia = $ingresos - $gastos;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($ingresos < $gastos): ?>
        <h1>CUIDADO PODRÍAS ESTAR EN BANCA ROTA</h1>
        <h2>Desglose de gastos</h2>
        <ul>
            <li>En alquiler has gastado: <?= $alquiler ?> €</li>
            <li>En comida has gastado: <?= $comida ?> €</li>
            <li>En transporte has gastado: <?= $transporte ?> €</li>
            <li>En entretenimiento has gastado: <?= $entretenimiento ?> €</li>
        </ul>
        <p>Estás gastando un total de <?= $gastos ?> €, lo cual excede tus ingresos.</p>
    <?php else: ?>
        <h1>¡MUY BIEN, SIGUE ASÍ!</h1>
        <h2>Desglose de gastos</h2>
        <ul>
            <li>En alquiler has gastado: <?= $alquiler ?> €</li>
            <li>En comida has gastado: <?= $comida ?> €</li>
            <li>En transporte has gastado: <?= $transporte ?> €</li>
            <li>En entretenimiento has gastado: <?= $entretenimiento ?> €</li>
        </ul>
        <p>Estás gastando un total de <?= $gastos ?> €, ahorrando <?= $diferencia ?> € cada mes. ¡Sigue así!</p>
    <?php endif; ?>
</body>
</html>
>>>>>>> 0990920702543f0b596451a320f73ba724c9f19c
