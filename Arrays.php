<?php

//Ejercicio 1

echo "<h1> Ejercicio 1</h1> </br>";

$saramartinez = array("nombre"=>"Sara","apellido"=>"Martinez","edad"=>23,"ciudad"=>"Barcelona");

$count = 1;
foreach ($saramartinez as $key => $value) {
    echo "dato ".$count .": ". $value ."</br>";
    $count = $count +1;
}


//Ejercicio 2

echo "<h1> Ejercicio 2</h1> </br>";

foreach ($saramartinez as $key => $value) {
    echo $key ." : ". $value ."</br>";
}

//Ejercicio 3

echo "<h1> Ejercicio 3</h1> </br>";

$saramartinez["edad"] = 24;

foreach ($saramartinez as $key => $value) {
    echo $key ." : ". $value ."</br>";
}

//Ejercicio 4

echo "<h1> Ejercicio 4</h1> </br>";

unset($saramartinez["ciudad"]);

var_dump($saramartinez);



//Ejercicio 5

echo "<h1> Ejercicio 5</h1> </br>";


$letters = "a,b,c,d,e,f";

$explotado = array();

$explotado[] = explode(",",$letters);
echo "<pre>";
var_dump($explotado);
echo "</pre>";

//Ejercicio 6

echo "<h1> Ejercicio 6</h1> </br>";

$alumnos = array("Miguel"=>5,"Luis"=>7,"Marta"=>10,"Isabel"=>8,"Aitor"=>4,"Pepe"=>1);

arsort($alumnos);

foreach ($alumnos as $key => $value) {
    echo $key ." : ". "$value" ;
    echo "<br>";
}

//Ejercicio 6

echo "<h1> Ejercicio 6</h1> </br>";

$suma = 0;

foreach ($alumnos as $key => $value) {
    $suma = $suma + $value;
}


echo "Media de las notas: " . round($suma/6,2) . "<br>";
echo "Alumnos con nota por encima de la media: <br>";

foreach ($alumnos as $key => $value) {
    if ($value > $suma/6) {
        echo $key . "<br>";
    }
}

//Ejercicio 8

echo "<h1> Ejercicio 8</h1> </br>";

arsort($alumnos);

reset($alumnos);
echo "La nota más alta es " . current($alumnos) ." y el mejor alumno es " . key($alumnos);


?>