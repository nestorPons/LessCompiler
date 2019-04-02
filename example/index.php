<?php 
require "../Lessc.php";
$Lessc = new Lessc;
$Lessc->setFormatter("compressed");
// Array named
$Lessc->arrPHP = ['background-color' => '#f00', 'color' => 'white'];  
$Lessc->compileFile('main.less','main.css'); // more efficient checkedCompile()

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina de muestra Less compiler +</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
 <h1>Pagina de muestra Less Compiler+</h1>   
</body>
</html>
