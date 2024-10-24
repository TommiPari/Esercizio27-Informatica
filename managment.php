<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $quantità = intval($_POST["quantità"]);
        $costo = intval($_POST["costo"]) * $quantità;
        $pagamento = $_POST["pagamento"];
        $usato = (isset($_POST["usato"])) ? "Oggetti usato" : "Oggetto non usato";
        $costoFinale = $costo;
        if ($usato == "Oggetti usato") {
            $costoFinale -= ($costoFinale * 0.2);
        }
        if ($pagamento == "carta") {
            $costoFinale += 2;
        }
    ?>
    <ul>
        <li>Nome: <?php echo $nome;?></li>
        <li>Quantità: <?php echo $quantità;?></li>
        <li>Pagamento: <?php echo $pagamento;?></li>
        <li>Usato: <?php echo $usato;?></li>
        <li>Costo iniziale: <?php echo $costo;?>€</li>
        <li>Costo finale: <?php echo $costoFinale?>€</li>
    </ul>
</body>
</html>