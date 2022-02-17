<?php
$file = isset($_GET["file"]) ? htmlspecialchars($_GET["file"]) : false;
$mountPatch = isset($_GET["mountPatch"]) ?   htmlspecialchars($_GET["mountPatch"]) : '/mnt/data/';

if ($file) {
    $filePatch = $mountPatch . $file;
    echo "<p>Creating file ${filePatch}...</p>";

    shell_exec("touch ${filePatch}");
} else {
    echo '<p>Temporary file name for creating in EFS mount was not passed.
          You can pass it via <a href="?file=blahblah">?file=blahblah</a></p>';
}

echo '<h1>whoami:</h1>';
$output = shell_exec('whoami');
echo "<pre>${output}</pre>";

echo "<h1>${mountPatch}:</h1>";
$output = shell_exec("ls -lh ${mountPatch}");
echo "<pre>${output}</pre>";

echo "<h1>Mounts:</h1>";
$output = shell_exec('mount');
echo "<pre>${output}</pre>";
