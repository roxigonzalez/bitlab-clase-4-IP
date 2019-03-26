# CURSO BITLAB
## Introducción a la programación
### Clase 4: PHP

#### Temas

* ¿Qué es PHP?
* Ambiente de trabajo
* PHP Syntax
* Variables en PHP
* PHP echo
* If, Else, If Else
* While en PHP
* For en PHP
* Funciones


### ¿Qué es PHP?

PHP, acrónimo recursivo en inglés de PHP: Hypertext Preprocessor (preprocesador de hipertexto), es un lenguaje de programación de propósito general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.
Fue uno de los primeros lenguajes de programación del lado del servidor que se podían incorporar directamente en un documento HTML en lugar de llamar a un archivo externo que procese los datos. El código es interpretado por un servidor web con un módulo de procesador de PHP que genera el HTML resultante.


### ¿Qué pudo hacer con PHP?
Podemos hacer API's, recopilar datos de formularios, generar páginas con contenidos dinámicos, o enviar y recibir cookies, enviar correos electrónicos.
PHP es lo suficientemente potente como para estar en el núcleo del sistema de blogs más grande de la web (WordPress). Es lo suficientemente poderoso como para ejecutar la red social más grande (Facebook). Y fácil de aprender.

PHP es de código abierto ampliamente utilizado, por lo tanto es gratuito para descargar y usar.

### Ambiente de Trabajo
Para servir a un navegador páginas web escritas en PHP es necesario disponer de un servidor de páginas web y del lenguaje de programación PHP. También es conveniente, aunque no es imprescindible disponer de un servidor de bases de datos.

Una herramienta útil que provee paquete de instalación que incluye el servidor, PHP y MYSQL puede ser: XAMPP, WAMP, LAMP,  MAMP, entre otros.

En mi caso, usaré XAMPP.

Enlace donde puedes descargarlo según tu SO. https://www.apachefriends.org/es/index.html


### Sintaxis

El código de PHP está encerrado entre las etiquetas especiales de comienzo y final `<?php` y `?>` que permiten entrar y salir del "modo PHP".

```
<?php
echo "Hola mundo";

// ... más código

echo "Última sentencia";

// el script finaliza aquí sin etiqueta de cierre de PHP
```


La extensión de archivo predeterminada para los archivos PHP es ".php".

Cualquier cosa fuera de un par de etiquetas de apertura y cierre es ignorado por el intérprete de PHP, lo que permite que los ficheros de PHP tengan contenido mixto. Esto hace que PHP pueda ser embebido en documentos HTML para, por ejemplo, crear plantillas.

```
<p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
<?php echo 'Mientras que esto va a ser interpretado.'; ?>
<p>Esto también será ignorado por PHP y mostrado por el navegador.</p>
```

Las declaraciones o sentencias de PHP terminan con un punto y coma (;).


## Tipos de variables

PHP cuenta con muchos tipos de datos, sin embargo, en este momento nos vamos a enfocar en los más importantes y utilizados que son boolean, integer, float, string, array y NULL.

### Tipos escalares:

* boolean:

  Representa solamente un valor verdadero o falso. [Ref]( http://php.net/manual/es/language.types.boolean.php)

  Valores válidos: `true` (verdadero) `false` (falso)


```PHP
<?php
$a = true;
$b = false;
?>
```

* Integer:

  Representa un número entero positivo, negativo o 0. [Ref](http://php.net/manual/es/language.types.integer.php)

```PHP
<?php
$a = -123;
$b = 0;
$c = 7763;
?>
```



  * float o double:

    Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras. [Ref](http://php.net/manual/es/language.types.float.php)


```PHP
<?php
$a = 12.24;
$b = 1.5e3;
$c = 7E-10;
?>

```


  * string:


    * Representa una cadena de caracteres.
    * Existen 4 formas de representar una cadena. Las 2 principales son usando comillas simples o comillas dobles.
    ---- Usando comillas simples donde el texto será exactamente como se escribe.
    ---- Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.
    * Hay 2 formas adicionales llamadas Heredoc y Nowdoc que sirven para crear cadenas de múltiples líneas.


  Si quieres conocer más de este tipo de dato da clic [aquí](https://www.php.net/manual/es/language.types.string.php#language.types.string.details)


```PHP
<?php
$a = ”Hola”;
$b = ‘Mundo’;
?>

```


### Tipos compuestos:

  * array:

    Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array. [Ref.](http://php.net/manual/es/language.types.array.php)

```PHP
<?php
$array = array(
    "curso1" => "php",
    "curso2" => "js",
);

// a partir de PHP 5.4
$array = [
    "curso1" => "php",
    "curso2" => "js",
];

// índices numéricos
$array = [
    "php",
    "js",
];
?>

```

### Ámbito de las variables
El ámbito de una variable es el contexto dentro del que la variable está definida y donde la variable puede ser referenciada / utilizada.

Las variables se pueden declarar en cualquier parte del script.

PHP tiene tres ámbitos variables diferentes:
* global
* local
* estática

**Global**

Una variable declarada fuera de una función tiene un ÁMBITO GLOBAL y solo se puede acceder fuera de una función.

Ejemplo:

```php
<?php
$x = 5;
function myTest() {
    // Esto dará error y el valor de $x no se mostrará.
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

```

**Local**

Una variable local es la que se declara dentro de una función tiene un ALCANCE LOCAL y solo se puede acceder dentro de esa función.

Ejemplo:

```php
 <?php
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x es: $x</p>";
}
myTest();

// Esto dará error.
echo "<p>Variable x outside function is: $x</p>";
?>
```

Ejemplo usando la variable GLOBAL
```
<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // muestra 15
?>

```


**Static**

Una variable estática existe sólo en el ámbito local de la función, pero no pierde su valor cuando la ejecución del programa abandona este ámbito.

Ejemplo:

```
<?php
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}


test();
test();
test();
?>
```

Luego, cada vez que se llame a la función, esa variable seguirá teniendo la información que contenía la última vez que se llamó a la función.
La variable sigue siendo local a la función.

### Echo
Para imprimir en la pantalla usamos echo() puede usarse con o sin paréntesis y podemos añadir etiquetas HTML.

Ejemplo:

```
 <?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

```

Podemos mostrar texto como el ejemplo anterior o el valor de variables.
Ejemplo:

```
 <?php
$txt1 = "PHP";
$txt2 = "Bitlab";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Estoy estudiando en " . $txt2 . "<br>";
echo $x + $y;
?>
```

**If … Else**

Ejecuta algún código si una condición es verdadera y otro código si esa condición es falsa
Ejemplo:

```PHP
 <?php
$t = date("H");

if ($t < "20") {
    echo "Buen día!";
} else {
    echo "Buenas noches!!";
}
?>
```

**If … Elseif … Else**

Ejecuta códigos diferentes para más de dos condiciones.
Ejemplo:

```PHP
 <?php
$t = date("H");

if ($t < "12") {
    echo "Buenos días";
} elseif ($t < "18") {
    echo "Buenas tardes";
} else {
    echo "Buenas noches!";
}
?>
```

**Ciclo While**

El ciclo o bucle while ejecuta un bloque de código siempre que la condición especificada sea verdadera.

El siguiente ejemplo primero establece una variable `($ x = 1)`. Luego, el bucle while continuará ejecutándose mientras $x sea menor o igual a 5 ($ x <= 5). $x aumentará en 1 cada vez que se ejecute el bucle ($ x++)

```PHP
 <?php
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>

```

**Ciclo Do While**

El ciclo o bucle do ... while siempre ejecutará el bloque de código una vez, luego verificará la condición y repetirá el bucle mientras la condición especificada sea verdadera.

```PHP
 <?php
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>
```


**Ciclo For**

El ciclo o bucle for se utiliza cuando se sabe de antemano cuántas veces debe ejecutarse el script.

Parámetros:

Contador de inicio: inicialice el valor del contador de bucle
Expresión a evaluar: evaluado para cada iteración de bucle. Si se evalúa como VERDADERO, el bucle continúa. Si se evalúa a FALSO, el bucle termina.
Contador de incremento: aumenta el valor del contador de bucle

Ejemplo:

```PHP
 <?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>
```

## Funciones
En PHP se definen funciones con la palabra function.
El nombre de una función puede comenzar con una letra o un guión bajo (no un número).
Como consejo: Asigne a la función un nombre que refleje lo que hace la función!

Ejemplo:
```PHP
 <?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>
```

Ejemplo: Parámetros
```PHP
 <?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
```

Ejemplos

Mezclar modo HTML y PHP
```PHP
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {

?>

<h3>strpos() debe haber devuelto no falso</h3>


<p>Está usando Internet Explorer</p>

<?php

} else {
?>
<h3>strpos() debe haber devuelto falso</h3>
<p>No está usando Internet Explorer</p>
<?php
}
?>
```

Formulario y controles
HTML
```html
<form action="accion.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>

```

**PHP**

```php

Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo $_POST['edad']; ?> años.

```

### Tarea

Agrega una sección de contacto al sitio web del restaurante creado en la clase #3, este formulario debe permitir introducir nombre, email, telefono y comentarios, al ser enviado deberá enviar un correo con la información a un correo especifico, todo este proceso desarrollado con PHP.

### Bibliografía:

http://php.net/manual/es/index.php
https://www.w3schools.com/php7
https://es.wikipedia.org/wiki/PHP
