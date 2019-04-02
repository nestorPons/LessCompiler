# LessCompiler

Compilador Less en php con soporte para variables php


Clase Less modificada del repositorio de http://leafo.net/lessphp se le ha incluido la posibilidad de leer las variables de php desde archivos css

ej: 

/main.less 
@main-font: ^font_main, sans-serif;

/index.php
$args = ['font_main' => $_POST['text1']??'Roboto']; 
    
$less = new lessc;
$less->setFormatter("compressed");
$less->checkedCompile('/main.less','/main.css');
