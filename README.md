# LessCompiler+

Autor Néstor Pons 
Licencia MIT 

Compilador Less en php con soporte para variables php

Clase Less modificada del repositorio de http://leafo.net/lessphp se le ha incluido la posibilidad de leer las variables de php desde archivos css

Se ha de insertar valores en un array al atributo $Less->arrPHP y los valores de pasaran al fichero css de salida
Esto es útil si tines los estilos guardados en un abase de datos, por ejemplo. 

ej: 

/index.php
$args = ['font_main' => $_POST['text1']??'Roboto']; 
    
$less = new lessc;
$less->arrPHP['clave'=>'valor'];
$less->checkedCompile('/main.less','/main.css');

/main.less 
body{
    background-color: $clave;
}

/main.css
body{background-color:valor}