<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna{
            background-color: silver;
        }
    </style>
</head>

<body>
<table border="1" cellpadding="10">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($i % 2 == 1) { ?>
            <tr class="warna">
        <?php } else { ?>
            </tr>
        <?php } ?>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
            <td><?php echo "$i, $j"; ?></td>
        <?php endfor ?>
    <?php endfor ?>
</table>
</body>

</html>