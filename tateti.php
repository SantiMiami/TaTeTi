<?php

//Santi (parte de intercalasion entre jugadores).
$jugadores = array('Jugador 1'=> 1, 'Jugador 2' => 2);
$Marcas = array('X'=> 1, 'O' => 2);
if ($_POST['Envio'] == 1){
    $jugador_marcas = $Marcas['X'];
}
if ($_POST['Envio'] == 2){
    $jugador_marcas = $Marcas['O'];
}

//German Tablero:
<?php
$mar = array();

// Inicializar el tablero con todas las casillas de agua
foreach (range('A', 'C') as $letra) {
    foreach (range(1, 3) as $numero) {
        $mar[$letra][$letra . $numero] = 'agua';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tablero de Batalla Naval</title>
<style>
    table {
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
        padding: 80px;
        text-align: center;
    }
    .agua {
        background-color: white;
    }
    .barco {
        background-color: rgb(1, 2, 3);
    }
</style>
</head>
<body>

<h2>Tablero de Batalla Naval</h2>
<table>
    <?php
    // Mostrar el tablero
    foreach ($mar as $fila) {
        echo "<tr>";
        foreach ($fila as $casilla) {
            echo "<td class='" . ($casilla == 'agua' ? 'agua' : 'barco') . "'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>




?>