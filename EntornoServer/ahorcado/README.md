# Juego del ahorcado
### Problemas: 
>Intenté hacer una imagen svg del muñeco sin cabeza, sin brazon, etc. Me quedó grande y no pude hacerlo.

## Patron utilizado:

```PHP
const PATTERN = "/^[a-zA-Z]{1}$/i";
```

## Condición utilizada:

```PHP
if (!(empty($letra)) && strlen($letra)==CARACTER_MINIMO && (preg_match(PATTERN,$letra))==1) {
            echo "<p>It works!</p>";
}
```

## Lectura de fichero y gererando aleatoriamente una palabra:

```PHP
    $palabras = [];
    $file = fopen("./palabras.txt",'r') or die("error al leer el archivo");
    while ($a = fgets($file)) {
        $palabras[]=$a;
    }
    shuffle($palabras);
    echo $palabras[0];
```