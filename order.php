<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Podsumowanie zamówienie</h1>
<?php
$rogale=$_POST['rogale'];
$bulka=$_POST['bulka'];
$sokow=$_POST['sokow'];
$chipsy=$_POST['chipsy'];
$mleko=$_POST['mleko'];
$czekolada=$_POST['czekolada'];
$maslo=$_POST['maslo'];
$wodka=$_POST['wodka'];
$suma=(0.99*$rogale)+(1.29*$bulka)+(2.45*$sokow)+(7.00*$chipsy)+(2.99*$mleko)+(5.25*$czekolada)+(1.45*$maslo)+(20.00*$wodka);
$sum=($rogale)+($bulka)+($sokow)+($chipsy)+($mleko)+($czekolada)+($maslo)+($wodka);
$srogale=(0.99*$rogale);
$sbulka=(1.29*$bulka);
$ssokow=(2.45*$sokow);
$schipsy=(7.00*$chipsy);
$smleko=(2.99*$mleko);
$sczekolada=(5.25*$czekolada);
$smaslo=(1.45*$maslo);
$swodka=(20.00*$wodka);
echo<<<END
<th2>Podsumowanie zamówienia</h2>
<table border="1" callpadding="10" callspacing="0" bgcolor="darkgreen">
<tr bgcolor="grey">
<td>Nazwa Towaru</td><td>Ilość sztuk</td><td>Wartośc PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> Rogal (0.99PLN/szt)</td><td>$rogale </td><td>$srogale PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> Bulka (1.29PLN/szt)</td><td>$bulka </td><td>$sbulka PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> sokow (2.45PLN/szt)</td><td>$sokow </td><td>$ssokow PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> chipsy (7.00PLN/szt)</td><td>$chipsy </td><td>$schipsy PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> mleko (2.99PLN/szt)</td><td>$mleko </td><td>$smleko PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> czekolada (5.25PLN/szt)</td><td>$czekolada</td><td>$sczekolada PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> masło (1.45PLN/szt)</td><td>$maslo </td><td>$smaslo PLN</td>
</tr>
<tr  bgcolor="lightgrey">
<td> wodka (20.00PLN/szt)</td><td>$wodka </td><td>$swodka PLN</td>
</tr>
<tr bgcolor="darkgrey">
<td> SUMA</td><td>$sum </td><td>$suma PLN</td>
</tr>
</table>
<br><a href="index.php">Powrót do strony głownej</a>
END;

?>

</body>
</html>