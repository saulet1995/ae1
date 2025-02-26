<?php

echo "¡Enhorabuena! Has ganado :) La palabra era: " . $_SESSION['palabra'] . "<br>";
session_destroy();
echo '<a href="../">Jugar de nuevo</a>';

?>