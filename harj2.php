<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $arv1 = 10;
    $arv2 = 20;
    $liit = $arv1 + $arv2;
    $lahut = $arv1 - $arv2;
    $korruta = $arv1 * $arv2;
    $jaga = $arv1 / $arv2;
    $jaak = $arv1 % $arv2;

    echo "$arv1 + $arv2 = $liit<br>";
    echo "$arv1 - $arv2 = $lahut<br>";
    echo "$arv1 * $arv2 = $korruta<br>";
    echo "$arv1 / $arv2 = $jaga<br>";
    echo "$arv1 % $arv2 = $jaak<br>";

    $mm = 165.555;
    $cm = $mm / 10;
    $m = $mm / 1000;
    printf ("%.2f mm on %.2f cm või %.2f m<br> <br>", $mm, $cm, $m);

    $a = 3;
    $b = 4;
    $c = 5;

    $p = $a + $b + $c;
    $s = ($a * $c )/2;
    printf("kolmnurga ymbermoot on %d ja pindala on %d", $p, $s);

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>