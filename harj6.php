<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"></div>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo "$i. ";
        if ($i % 10 === 0) {
            echo"<br>";
        }
    }
    ?>
    <?php
    $tarn = 10;
    for ($i = 0; $i < $tarn; $i++) {
        echo"* ";
    }
 
    $tarn2 = 10;
    for ($a = 0; $a < $tarn2; $a++) {
        echo "*<br>";
    }
    ?>

    <form action="" method="get">
        <h4> tarnide ruut </h4>
            <label for="ruut suurus"> kui suur ruut:</label>
            <input type="arv" id="suurus" name="suurus" min="1" required>
            <button type="submit">ruut</button>
</form>
<?php
if (isset($_GET["ruut suurus"])) {
    $ruutsuurus = intval($_GET["ruut suurus"]);

    for ($i = 0; $i < $ruutsuurus; $i++) {
        for ($a = 0; $a < $ruutsuurus; $a++) {
            echo"* ";

        }
        echo"<br>";
    }
} else {
    echo "sisesta ruut suurus";
}
?>
<?php
for ($a = 10; $a >= 1; $a--) {
    if ($a % 2 == 0) {
        echo $a . "<br>";
    }
}
?>
<?php
for($i = 1; $i <= 100; $i++)
    if($i % 3 == 0) {
        echo $i . "<br>";
    
    }
?>

<?php
$poiss = array("Aleksandr", "Sergei", "Vladimir", "Andrei", "Martin", "Aleksei", "Andres", "Dmitri", "Igor", "Toomas");
$tydruk = array("Olga", "Irina", "Jelena", "Svetlana", "Tatjana", "Anna", "Valentina", "Galina", "Natalja", "Maria");

if(count($poiss) == count ($tydruk)) {
    for ($i = 0; $i <count($poiss); $i++) {
        echo $poiss[$i] . " ja " . $tydruk[$i] . "<br>";
    }
}



?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>