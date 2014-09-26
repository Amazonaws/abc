<?php
$file = './README.txt';
 
if(file_exists($file))
{
    header('Content-Type: application/force-download');
    header("Content-Transfer-Encoding: binary");
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    readfile($file);
    exit();
}
else
{
    echo 'Le fichier n\'existe pas : '.realpath($file);
}
?>
