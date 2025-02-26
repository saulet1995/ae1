<?php

    echo "Lo siento, has perdido :( La palabra era: " . $_SESSION['palabra'] . "<br>";
    session_destroy();
    echo '<a href="../">Jugar de nuevo</a>';

?>