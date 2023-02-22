<?php
//Declaramos variable
$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkjava = "";
$chkpython = "";

$lsAnime ="";

$txtComentario ="";


//Decimos que si existe un envío por esto haga esto
if ($_POST){
    
    //Verifique que se haya enviado txtNombre y lo asigne a la variable del mismo nombre
    //Encaso contrario que el valor de txtNombre sea  "" . If ternario "?"
    $txtNombre = (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $rdgLenguaje = (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";

    /**
     * En este caso comprobamos si existe un envío por POST con el nombre ["chkphp"] y que el valor sea "si"
     * en caso de ser cierto, asignamos la cadena "checked" para mantener el visualmente el valor en el html
     */ 
    $chkphp = (isset($_POST["chkphp"])=="si")?"checked":"";
    $chkjava = (isset($_POST["chkjava"])=="si")?"checked":"";
    $chkpython = (isset($_POST["chkpython"])=="si")?"checked":"";
    

    /**
     * Usamos devuelta un if ternaci, diciendo que si existe el envío post con nombre
     * lsAnime lo asignamos a la variable $lsAnime y si no existe se queda vacía
     */
    $lsAnime = ( isset($_POST["lsAnime"]))?$_POST["lsAnime"]:"";


    $txtComentario = (isset($_POST["txtComentario"]))?$_POST["txtComentario"]:"";


    //print_r($lsAnime);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!--Decimos que si ha ocurrido un envío por POST nos pinte el nombre txtNombre-->
    <?php if($_POST){ ?>
    <strong>Hola: </strong> <?php echo $txtNombre; ?>    
    <br/>
    <strong>Tú lenguaje que te gusta es: </strong> <?php echo $rdgLenguaje; ?> 
    <br/>
    <!--
    Indicamos que muestre la seleción del desplegable select, indicamos que si
    la option $chkphp, $chkjava o $chkpython esta checked que lo muestre en el html
    -->
    <strong>Estás aprendiendo: </strong> 
    <?php echo ($chkphp =="checked")?"-PHP ":""; ?> 
    <?php echo ($chkjava =="checked")?"-JAVA ":""; ?> 
    <?php echo ($chkpython =="checked")?"-PYTHON":""; ?> 
    <br/>
    <strong>El anime que te gusta es: </strong>
    <?php echo $lsAnime; ?>
    <br/>

    <strong>El comentario es es: </strong>
    <?php echo $txtComentario; ?>
    <br/>

    <?php } ?>

    <form action="ejercicio31.php" method="post">

        <br/>Nombre: <br/>
        <!-- Decimos que el valor del input se mantenga en el area de texto -->
        <input value= "<?php echo $txtNombre;?>" type="text" name="txtNombre" id=""><br/>
        
        <br/>¿Te gusta?: 
        <!--
        Indicamos que si $rdgLenguaje es igual al valor del radióbutton, entonces lo seleccione para no perder la selección
        una vez enviado por post
        -->
        <br/> PHP <input type="radio" <?php echo ($rdgLenguaje=="PHP")?"checked":""; ?> name="lenguaje" value = "PHP" id="">
        <br/> JAVA <input type="radio" <?php echo ($rdgLenguaje=="JAVA")?"checked":""; ?> name="lenguaje" value = "JAVA" id="">
        <br/> PYTHON <input type="radio" <?php echo ($rdgLenguaje=="PYTHON")?"checked":""; ?> name="lenguaje" value = "PYTHON" id=""><br/>

        <!-- 
        Aquí indicamos mostrar lo que vale $chkphp que si se ha enviado mostrara checked para indica que
        esos valores fueron seleccionados
         -->
        <br/> Estás aprendiendo... <br/>
        PHP<input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value ="si" id=""><br/>
        JAVA<input type="checkbox" <?php echo $chkjava; ?> name="chkjava" value ="si" id=""><br/>
        PYTHON<input type="checkbox" <?php echo $chkpython; ?> name="chkpython" value ="si" id=""><br/>

        <!--
        Aquí hacemos algo parecido al caso anterior, pero aquí le indicamos que si la variable $lsAnime y esigual
        a alguna de las opciones, incrustamos selected para mantener la opcion al eniavar el formulario
        -->
        <br/> ¿Qué Anime te gusta?... <br/>
        <select name="lsAnime" id="">
            <option value="">[Ninguna]</option>
            <option value="Hunter X Hunter" <?php echo ($lsAnime=="Hunter X Hunter")?"selected":""; ?> >Hunter X Hunter</option>
            <option value="Dragon Ball" <?php echo ($lsAnime=="Dragon Ball")?"selected":""; ?> >Dragon Ball</option>
            <option value="Shingeki no Kyojin"  <?php echo ($lsAnime=="Shingeki no Kyojin")?"selected":""; ?>>Shingeki no Kyojin</option>
        </select><br/>

        <br/>¿Tienes Alguna Duda?: <br/>
        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea><br/>
        
        <br/><input type="submit" value="Enviar Información">
    </form>
</body>
</html>