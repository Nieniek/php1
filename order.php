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
$suma=(0.99*$rogale)+(1.29*$bulka)+(2.45*$sokow);
$sum=($rogale)+($bulka)+($sokow);
$srogale=(0.99*$rogale);
$sbulka=(1.29*$rogale);
$ssokow=(2.45*$rogale);
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
<tr bgcolor="darkgrey">
<td> SUMA</td><td>$sum </td><td>$suma PLN</td>
</tr>
</table>
<br><a href="index.php">Powrót do strony głownej</a>
END;

?>

</body>
</html>