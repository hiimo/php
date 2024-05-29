<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>harj 09</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
echo "<form action='#' method='get'>
                    <input type='text' name='nimi' id='nimi' value='nimi' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['nimi'])){
                    echo "Tere, ".ucfirst(strtolower($_GET['nimi']));
                }


 echo "<br>";
                echo "<form action='#' method='get'>
                    <input type='text' name='tekst' id='tekst' value='tekst' />
                    <input type='submit' value='Saada' />
                    </form>";
                if (isset($_GET['tekst'])){
                    for ($i = 0; $i < strlen($_GET['tekst']); $i++){
                        echo $_GET['tekst'][$i].".";
                    }
                }
?>

<form method="get" action="">
<h2>Ropp sona tarnideks ropud sonad on noob, loll ja idioot </h2>
    <label for="lause">Sisesta lause:</label><br>
    <textarea id="lause" name="lause" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Korrasta">
</form>

    <?php
    function ropudsonad($lause) {
        $ropp = array("noob", "uudo", "loll");
        foreach ($ropp as $sona) {
            $lause = preg_replace("/\b" . preg_quote($sona, "/") . "\b/i", str_repeat("*", strlen($sona)), $lause);
        }
        return $lause;
    }
        $lause1 = $_GET["lause"];
        $korraslause = ropudsonad($lause1);
        echo "<p>Korras lause: $korraslause</p>";
    ?>


<?php
  echo "<br>";
  echo "<form action='#' method='get'>
      <input type='text' name='nimi' id='nimi' value='nimi' />
      <input type='text' name='perenimi' id='perenimi' value='perenimi' />
      <input type='submit' value='Saada' />
      </form>";
  if (isset($_GET['nimi']) && isset($_GET['perenimi'])){
      $eestitahed = array('ä', 'ö', 'ü', 'õ', 'š', 'ž');
      $asendus2 = array('a', 'o', 'u', 'o', 's', 'z');
      $nimi = str_replace($eestitahed, $asendus2, $_GET['nimi']);
      $perenimi = str_replace($eestitahed, $asendus2, $_GET['perenimi']);
      echo $nimi.".".$perenimi."@hkhk.ee";
  }
?>
</body>
</html>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>