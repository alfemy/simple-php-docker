<?php

echo "Hello, World from Docker ruuning at !<br>";
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png"><br>';
echo "<h1>Show mounts inside of container:</h1>";
$output = shell_exec('mount');
echo "<pre>$output</pre>";
?>
