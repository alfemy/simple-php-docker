<?php

echo "Hello, World from Docker ruuning at ECS!<br>";
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png"><br>';

while (list($var,$value) = each ($_ENV)) {
    echo "$var => $value <br />";
}

?>
