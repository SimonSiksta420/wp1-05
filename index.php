<?php
$homelessmoney1 = 232;
$homelessmoney = 25 + 17 + 40 + 100 - 50 + 100;
$vodkaprice = 119;
$cigaretteprice = 50;
$vodkapricecigaretteprice = 169;
$answer;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($homelessmoney >= $vodkapricecigaretteprice) {
    $homelessmoney = $homelessmoney - $vodkapricecigaretteprice
    $answer = "Děkujeme za váš nákup"
}
elseif ($homelessmoney < $vodkapricecigaretteprice ) {
    $answer = "Nemáte peníze na vodku a cigarety"
}
elseif ($homelessmoney => $vodkaprice) {
    $homelessmoney = $homelessmoney - $vodkaprice
    $answer = "Vodka zakoupena ale nemáte peníze na cigarety"    
}
elseif ($homelessmoney => $cigaretteprice ) {
    $homelessmoney = $homelessmoney - $cigaretteprice
    $answer = "Cigarety zakoupeny ale nemáte peníze na vodku"
}

?>

<p> Peníze bezdomovce před návštěvou večerky <?= $homelessmoney1; ?> <p>
<p> Cena vodky <?= $vodkaprice; ?> <p>
<p> Cena Cigaret <?= $cigaretteprice; ?> <p>

<?= $answer; ?>

<p> Peníze po návštěvě večerky <?= $homelessmoney ?>  <p>

</body>
</html>