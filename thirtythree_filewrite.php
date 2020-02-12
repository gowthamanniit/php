<?php
$file=fopen("d:/nofile.txt","a");  //a w

$data="hai i am going to write in file";

//print(fwrite($file, $data));
//print(fwrite($file, $data,10));
//print(fputs($file, $data));
//print(fputs($file, $data,10));
//print(file_put_contents("d:/summa.txt", "sampath kuamr"));

$k=array("selva","kumar","raja");
$file=fopen("d:/summa2.csv","x"); //

fputcsv($file, $k);

echo "file writed successfully";

?>