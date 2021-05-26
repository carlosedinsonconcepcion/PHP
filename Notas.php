<?php
    #Extracción de datos.
    #De esta cadena de texto extraer los caracteres que yo le diga al impimir.
    $data = 'Estudio PHP';
    echo $data[0];
    //echo $data{0};
    // //E


    #Imaginemos que tenemos un post
    $post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam omnis reprehenderit debitis quos voluptatum odit eos, doloremque aperiam vel illo voluptate? Accusantium, velit aliquam quasi totam architecto libero nobis!';
    $extract = substr($post, 0, 20);
    echo "$extract... [Ver más]";

    #Si tenemos un texto y un formulario que diga ingresa las etiquetas de este post podemos pasar ese texto a un array directamente.
    #pre permite organizar mejor mi información.
    $data = 'javascript, php, laravel';
    $tags = explode(', ', $data); //le digo que cada vez que consiga una coma a un arreglo. Y ESE ARRAY ES EL QUE GUARDAMOS EN LA ABSE DE DATOS.
    echo "<pre>";
    var_dump($tags);
    /* SALIDA:
        array(3) 
        {
            [0]=>
            string(10) "javascript"
            [1]=>
            string(3) "php"
            [2]=>
            string(7) "laravel"
        }
    */


    #Pasar un array a string
    $courses = ['javascript', 'php', 'laravel'];
    echo implode(', ', $courses);
    //javascript, php, laravel



    #Eliminar espacios.
    $course = "   Curso de PHP          ";
    echo trim($course);


    #Eliminar espacios.
    $course = "   Curso de PHP          ";
    $course = trim($course);
    echo "<pre>";
    echo "Quiero aprender $course, y otro texto";
    


    #Eliminar solo espacios de la izquierda.
    $course = "   Curso de PHP          ";
    $course = ltrim($course);
    echo "<pre>";
    echo "Quiero aprender $course, y otro texto";
    
    #Eliminar solo espacios de la derecha.
    $course = "   Curso de PHP          ";
    $course = rtrim($course);
    echo "<pre>";
    echo "Quiero aprender $course, y otro texto";
    

?>
##########################################FORMATO DE DATOS#####################################################################
###############################################################################################################


#Alterar
$text = "<h1>PHP es UN LENGUAJE</h1>";
echo $text;
//Hacer un texto en minuscula
echo "<pre>";
echo strtolower($text);
//Hacer un texto en Mayuscula
echo "<pre>";
echo strtoupper($text);
//Convierte el primer elemento en minuscula
echo "<pre>";
echo lcfirst($text);
//Convierte el primer elemento en Mayuscula
echo "<pre>";
echo ucfirst($text);

echo "<br><br>";
#Reemplazar
//reemplazamos cada espacio vacio por un guión(-)
$slug = str_replace(' ', '-', $text);
echo $slug;
echo strtolower($slug);

echo "<br><br>";
#Modificación
//Si tenemos una factura se imprima de la siguiente forma.
$code = 39;
//Vamos a tener 8 espacio con 8 carácteres
echo "<br>";
echo str_pad($code, 8, '#');
echo "<br>";
//Ambos lados, izquierda y derecha
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_LEFT);
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_RIGHT);

echo "<br><br>";
//En nuestra base de datos no se deben de guardar etiquetas.
//Con strip_tags eliminamos cualquier etiqueta html que contega el dato
echo strip_tags($text);

echo "<br><br>";
#ELEMENTOS MONOBYTES Y MULTIBYTES.
$text_uno = "PHP es UN LENGUAJE, año 2020, programación";
$text_dos = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text_uno);//monobye
echo "<br>";
//Al colocar mb_nombrefuncion con esto formateamos correctamente.
echo mb_strtoupper($text_dos);//multibyte
