<?php
$Turno = "matutino";

if ($Turno = "M") {
    echo "Bom dia";
} elseif ($Turno = "V") {
    echo "Boa tarde!";
} elseif ($Turno = "N") {
    echo "Boa noite";
} else {
    echo " Qualquer outra entrada: Turno inválido.";
}
?>