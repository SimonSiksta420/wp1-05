<?php
$homelessmoney = 25;
$vodkaprice = 19;


if ($homelessmoney >= 119) {
    $homelessmoney - 119
    $odpoved = "Děkujeme za váš nákup";
}
else {
    $odpoved = "Nemáte peníze na vodku nashledanou";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?= $homelessmoney; + 17 + 40 + 100 - 50 ?>
<br> Peníze bezdomovce před návštěvou večerky <?= $homelessmoney; ?> <br>
<br> Cena vodky <?= $vodkaprice; ?> </br>

<?= $odpoved; ?>

<br> Peníze po návštěvě večerky <?= $homelessmoney ?>  </br>


    
</body>
</html>