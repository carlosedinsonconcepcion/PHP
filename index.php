<?php

echo 'Un texto de una linea
varias lineas
comilla simple\' backslash\\ continuar con mas texto <br><br>';
/*
$name = 'Carlos';
echo "Mi nombre es $name <br>";

$courses = [
    'backend' => ['PHP', 
    'Laravel'
    ]
];

class User 
{
    public $name = 'Carlos';
}

$user = new User;


echo "$user->name quiere aprender {$courses['backend'][1]}";


$teacher = 'Carlos';
$Carlos = 'Amigo de Toro Lio';

echo "$teacher es ${$teacher}";

function getTeacher()
{
    return 'teacher';
}



echo "<br>${getTeacher()} enseña Arjona";


$data = 'Estudio PHP';

print($data[0]);
echo $data[-1];

$post = "<br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis ipsam dignissimos repellendus sint porro delectus enim eaque fugiat, tenetur aut!";

$extract = substr($post, 0, 20);

echo "$extract... [ver mas]"; 

$data = 'javascript, php, laravel';
$tags = explode(', ', $data);
print("<pre>");
var_dump($tags);



$courses = ['javascript', 'php', 'laravel'];
echo implode(', ', $courses); */

$course = " Curso de PHP  ";
echo trim($course);
print("<pre>");
echo "Quiero aprender $course, y otro texto";

/////////////////////////////////////////////////
/////////////////////////////////////////////////
#Formato de datos

//Alterar
$text = "<br><br>PHP es UN LENGUAJE, año 2021, programacion";
#echo lcfirst($text);

//Remplazar
$slug = str_replace('PHP', "Toro lio", $text);
#echo strtolower($slug);
print($slug);
// Modificacion 

$code = 39;

/*print(str_pad($code, 8, '#', STR_PAD_BOTH));*/

//echo strip_tags($text);

echo mb_strtoupper($text);

###############################EXPRESIONES REGULARES#################################
##############################################################################

$password = '123456';
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password));

#EXPRESIONES REGULARES
/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/
/*En platzi hay un curso completo de expressiones regulares */co