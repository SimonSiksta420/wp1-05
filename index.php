<?php
$homelessmoney = 25 + 17 + 40 + 100 - 50;
$vodkaprice = 119;
$answer;

if ($homelessmoney >= 119) { 
    $homelessmoney - 119;
    $answer = "Děkujeme za váš nákup";
}   
else {
    $answer = "Nemáte peníze na vodku";
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
<br> Peníze bezdomovce před návštěvou večerky <?= $homelessmoney; ?> <br>
<br> Cena vodky <?= $vodkaprice; ?> </br>

<?= $answer; ?>

<br> Peníze po návštěvě večerky <?= $homelessmoney ?>  </br>

</body>
</html>