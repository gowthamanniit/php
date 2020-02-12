<?php

$allfile="outfile.zip";

$zip=new ZipArchive();

$zip->open($allfile,ZipArchive::CREATE);

$zip->addfile("123.jpg");
$zip->addfile("123.txt");
$zip->addfile("456.txt");

$zip->close();
print("successfully create zip file");





?>