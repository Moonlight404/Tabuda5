<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de 5</title>
</head>
<body>
<table border="1">
    <tr>
    <td>Tabuada</td>
    <td>Resultado</td>
    </tr>
    <?php for($i = 0; $i <= 10; $i++){?>
    <tr>
        <td>5x<?php echo $i; ?></td>
        <td><?php echo 5 * $i;?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>