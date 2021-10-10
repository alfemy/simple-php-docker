<?php

echo "Hello, World from Docker ruuning at !<br>";
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png"><br>';
shell_exec('touch /mnt/data/file');
shell_exec("head -c 30M </dev/urandom >/mnt/data/myfile");



echo '<h1>Show contains of /mnt/data/</h1>';
$lsOutput = shell_exec('ls -lh /mnt/data');
echo "<pre>$lsOutput</pre>";

shell_exec('touch /tmp/testfile');

echo '<h1>Show contains of /tmp/</h1>';
$lsOutput = shell_exec('ls -lh /tmp/');
echo "<pre>$lsOutput</pre>";


echo '<h1>Show contains of /mnt/</h1>';
$lsOutput = shell_exec('ls -lh /mnt/');
echo "<pre>$lsOutput</pre>";

echo "<h1>Show mounts inside of container:</h1>";
$output = shell_exec('mount');
echo "<pre>$output</pre>";
?>
