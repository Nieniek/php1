<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Zamówienie online
    </h1>
   <form action="order.php" method="post">
        <p>Ile rogali(0.99PLN/szt):<input  type="text" name="rogale" required></p>
        <p>Ile bułek(1.29PLN/szt):<input  type="text" name="bulka"  required></p>
        <p>Ile soków(2.45PLN/szt):<input  type="text" name="sokow"  required></p>
        <input type="Submit" value="Wyslij zamówienie">
        <input type="reset"value="Wycyść">
    </form>

    
</body>
</html>