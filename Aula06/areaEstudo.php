<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Estudo</title>
</head>
<body>
    <h1>Selecione sua Área de Estudo</h1>
    
    <form method="POST" action="processarEscolha.php">
        <label for="areaEstudo">Área de Estudo:</label>
        <select id="areaEstudo" name="areaEstudo">
            <?php
            $areasEstudo = array("Ciência da Computação", "Engenharia", "Ciências Sociais", "Arte");
            foreach ($areasEstudo as $area) {
                echo "<option value='" . $area . "'>" . $area . "</option>";
            }
            ?>
        </select>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>