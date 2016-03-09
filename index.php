<!doctype html>
<html
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8">
</head>

<body>
<h1>Prvi PHP</h1>

<form>
    Prvi broj: <br>
    <input type="text" name="broj1"><br>
    Drugi broj: <br>
    <input type="text" name="broj2"><br>
    <br>
    <input type="submit" value="Izračunaj">

</form>


<?php

    echo('Ovo je prije odlomka<br>');
    echo('Ovo je jos dodano');

    echo(date ('d.m.Y'));
    echo('<br>');

    $rezultat = $_GET['broj1'] + $_GET['broj2'];
    echo('<br>' . $rezultat);
    echo('<br>');



   // $ocjena = 5;
    //echo('Vaša je ocjena :' . $ocjena);
    //$nova_var = 166.8;
    //echo('<br>' . $nova_var);

    //$rezultat = $ocjena + $nova_var;
    //echo('<br>' . $rezultat);

?>



    Ovo je odlomak

</p>
</body>
</html>