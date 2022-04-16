<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    
        <h2>Hola</h2>
        <?php
        $extension =".txt";
        $name=rand(1,30);
        echo $name ;

            
    $contenido = "hola Mundo";
    $rutaArchivo = "filesTxt/".$name.$extension;

    if (file_exists($rutaArchivo)){
        $archivo = fopen($rutaArchivo, "a");
        fwrite($archivo, PHP_EOL ."$contenido");
        fwrite($archivo, "Otra linea más" . PHP_EOL);
        //fputs($archivo,$contenido); //Tambien para escribir en el text
        fclose($archivo);
        }
        else{
        $archivo = fopen($rutaArchivo, "w");
        fwrite($archivo, PHP_EOL ."$contenido");
        //fputs($archivo,$contenido);
        fclose($archivo);
           }
        ?>
    </body>
</html>