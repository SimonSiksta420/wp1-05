<?php
$homelessmoney1 = 132;
$homelessmoney = 25 + 17 + 40 + 100 - 50;
$vodkaprice = 119;
$answer;

if ($homelessmoney >= 119) { 
    $homelessmoney = $homelessmoney - 119;
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
<p> Peníze bezdomovce před návštěvou večerky <?= $homelessmoney1; ?> <p>
<p> Cena vodky <?= $vodkaprice; ?> <p>

<?= $answer; ?>

<p> Peníze po návštěvě večerky <?= $homelessmoney ?>  <p>

</body>
</html>