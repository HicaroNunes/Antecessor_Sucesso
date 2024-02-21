<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <main>
<h1>Resultado Final
    <p>
<?php 
$n = $_REQUEST ["num"] ?? 0;
$a = $n - 1;
$s = $n +=1;
echo ("O número é ". $n . " !" );
echo ("<br>O número antecessor é " . $a . " !");
echo ("<br>O número sucessor é " . $s. " !");
?>
 </p>
</h1>
<button onclick="JavaScript:window.location.href='index.html'">Voltar</button>
   </main> 
</body>
</html>