<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1 class="titulo">Funciones</h1>
</body>
</html>

<!-- PHP -->
<?php

class EjemplosArreglos {
    
    public function ejemploArrayMerge() {
        $array1 = array('rojo', 'verde');
        $array2 = array('azul', 'amarillo');
        $resultado = array_merge($array1, $array2);
        print_r($resultado);
        echo "<br>";
    }

    public function ejemploArrayPush() {
        $frutas = array('manzana', 'pera');
        array_push($frutas, 'plátano', 'naranja');
        print_r($frutas);
        echo "<br>";
    }

    public function ejemploArrayPop() {
        $frutas = array('manzana', 'pera', 'plátano');
        $eliminado = array_pop($frutas);
        print_r($frutas);
        echo "<br>Elemento eliminado: $eliminado<br>";
    }

    public function ejemploArrayShift() {
        $colores = array('rojo', 'verde', 'azul');
        $eliminado = array_shift($colores);
        print_r($colores);
        echo "<br>Elemento eliminado: $eliminado<br>";
    }

    public function ejemploArraySlice() {
        $numeros = array(1, 2, 3, 4, 5);
        $porcion = array_slice($numeros, 1, 3);
        print_r($porcion);
        echo "<br>";
    }

    public function ejemploArraySplice() {
        $frutas = array('manzana', 'pera', 'plátano');
        array_splice($frutas, 1, 1, 'uva');
        print_r($frutas);
        echo "<br>";
    }

    public function ejemploAsort() {
        $edades = array('Juan' => 25, 'Ana' => 30, 'Pedro' => 22);
        asort($edades);
        print_r($edades);
        echo "<br>";
    }

    public function ejemploCount() {
        $numeros = array(1, 2, 3, 4, 5);
        $cantidad = count($numeros);
        echo "Cantidad de elementos: $cantidad<br>";
    }

    public function ejemploEach() {
        $colores = array('rojo', 'verde', 'azul');
        
        // Usando foreach para iterar sobre el array
        foreach ($colores as $clave => $valor) {
            echo "Clave: $clave, Valor: $valor<br>";
        }
    }
    

    public function ejemploEnd() {
        $frutas = array('manzana', 'pera', 'plátano');
        $ultimo = end($frutas);
        echo "Último elemento: $ultimo<br>";
    }

    public function ejemploExtract() {
        $datos = array('nombre' => 'Juan', 'edad' => 25);
        extract($datos);
        echo "Nombre: $nombre, Edad: $edad<br>";
    }

    public function ejemploInArray() {
        $colores = array('rojo', 'verde', 'azul');
        $busqueda = in_array('verde', $colores);
        echo "¿Verde está en el array?: " . ($busqueda ? 'Sí' : 'No') . "<br>";
    }

    public function ejemploList() {
        $numeros = array(1, 2, 3);
        list($a, $b, $c) = $numeros;
        echo "a = $a, b = $b, c = $c<br>";
    }

    public function ejemploNext() {
        $colores = array('rojo', 'verde', 'azul');
        $siguiente = next($colores);
        echo "Siguiente elemento: $siguiente<br>";
    }

    public function ejemploReset() {
        $colores = array('rojo', 'verde', 'azul');
        reset($colores);
        $primero = current($colores);
        echo "Primer elemento después de reset: $primero<br>";
    }

    public function ejemploSizeof() {
        $numeros = array(1, 2, 3, 4, 5);
        $tamano = sizeof($numeros);
        echo "Tamaño del array: $tamano<br>";
    }

    public function ejemploSort() {
        $frutas = array('manzana', 'pera', 'plátano');
        sort($frutas);
        print_r($frutas);
        echo "<br>";
    }

    public function ejemploUnset() {
        $colores = array('rojo', 'verde', 'azul');
        unset($colores[1]);
        print_r($colores);
        echo "<br>";
    }

    public function ejemploImplode() {
        $frutas = array('manzana', 'pera', 'plátano');
        $cadena = implode(', ', $frutas);
        echo "Frutas: $cadena<br>";
    }

    public function ejemploExplode() {
        $cadena = "manzana,pera,plátano";
        $frutas = explode(',', $cadena);
        print_r($frutas);
        echo "<br>";
    }
}

// Uso de los ejemplos
$ejemplos = new EjemplosArreglos();
$ejemplos->ejemploArrayMerge();
$ejemplos->ejemploArrayPush();
$ejemplos->ejemploArrayPop();
$ejemplos->ejemploArrayShift();
$ejemplos->ejemploArraySlice();
$ejemplos->ejemploArraySplice();
$ejemplos->ejemploAsort();
$ejemplos->ejemploCount();
$ejemplos->ejemploEach();
$ejemplos->ejemploEnd();
$ejemplos->ejemploExtract();
$ejemplos->ejemploInArray();
$ejemplos->ejemploList();
$ejemplos->ejemploNext();
$ejemplos->ejemploReset();
$ejemplos->ejemploSizeof();
$ejemplos->ejemploSort();
$ejemplos->ejemploUnset();
$ejemplos->ejemploImplode();
$ejemplos->ejemploExplode();
?>
