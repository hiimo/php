<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>harj 12</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Auto sõiduaeg</h1>
    <form method="get">
        <label for="start">start (hh:mm):</label>
        <input type="text" id="start" name="start" maxlength="5" required pattern="\d{2}:\d{2}">
        <br>
        <label for="end">lopp (hh:mm):</label>
        <input type="text" id="end" name="end" maxlength="5" required pattern="\d{2}:\d{2}">
        <br>
        <button type="submit">arvuta aeg</button>
    </form>

    <?php
    if (!empty($_GET["start"]) && $_GET["end"]) {
        $algus = $_GET["start"];
        $lopp = $_GET["end"];
        if (strlen($algus) < 5 || strlen($lopp) < 5) {
            echo "<p>peab olema rohkem kui 5</p>";
        } else {
            list($tund, $minut) = explode(":", $algus);
            list($tund2, $minut2) = explode(":", $lopp);
            $startstamp = $tund * 60 + $minut;
            $endstamp = $tund2 * 60 + $minut2;
            $diffminutes = ($endstamp - $startstamp + 1440) % 1440;

            $hours = floor($diffminutes / 60);
            $minutes = $diffminutes % 60;
            echo "<p>Sõiduaeg: $hours tundi ja $minutes minutit.</p>";
        }
    }
    ?>
 <?php
$fail="tootajad.csv";
$mpalk= 0;
$npalk= 0;
$marv= 0;
$narv= 0;
$mmax= 0;
$nmax= 0;
$csv = fopen($fail, "r") or die("pole faili");
while(feof($csv)){
$rida = fgetcsv($csv, filesize($fail),";");

if ($rida[1] == "m"){
    $mpalk += $rida[2];
    $marv++;
    $mmax = max($mmax, $rida[2]);
}
else{
    $npalk += $rida[2];
    $narv++;
    $nmax = max($nmax, $rida[2]);
}
}
fclose($csv);
$km= $marv > 0 ? round($mpalk / $marv) : 0;
$kn= $narv > 0 ? round($npalk / $narv) : 0;
echo "Meeste keskmine palk: $km<br>Naiste kesmine palk: $kn<br>";
echo "Meeste suurim palk on: $mmax<br>Naiste suurim palk on<br>";
?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>