<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['posicion_jugador1'])) {
        $posicion_jugador1 = $_POST['posicion_jugador1'];
        $jugador = '1';
        echo "Jugador 1 se posiciono en: " . $jugador. "\n";
    }
    if (isset($_POST['posicion_jugador2'])) {
        $posicion_jugador2 = $_POST['posicion_jugador2'];
        $jugador2 = '2';
        echo "Jugador 2 se posiciono en: " . $jugador2 . "\n";
    }
}
?>
