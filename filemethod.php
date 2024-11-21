<?php
echo readfile("readme.txt");
mkdir("text");

$file="readme.txt";
echo readfile("readme.txt");
echo realpath($file);
echo filesize($file);
echo filetype($file);

unlink("readme.txt");
?>