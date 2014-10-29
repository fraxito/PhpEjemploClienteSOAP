<!DOCTYPE html>
<!--
Ejemplo de uso de un cliente SOAP, configurado para el ejemplo de mi servidor SOAP

Si quieres usar el tuyo propio, cambia la URL en location

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Cliente SOAP</title>
    </head>
    <body>
        <?php
        $cliente = new SoapClient(null, array('location' => 'http://www.pruebasalmacen.hol.es/Servicio.php','uri' => 'urn:webservices', "trace" => 1));

        echo $cliente ->login(72862743,1234).'<br>';
        echo $cliente ->login(65157256,1234).'<br>';
        echo $cliente ->login(56829580,1234).'<br>';
        
        ?>
    </body>
</html>
