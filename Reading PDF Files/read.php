<?php 



$file = 'filename.pdf';

header('Content-type:application/pdf');
header('Content-Description:inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges:bytes');

@readfile($file);







?>