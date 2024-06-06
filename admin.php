<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="#"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand" href='#'>HiimoNarep.ee</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="yl4cv.php">Avaleht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tehtud.php">tehtud tood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="oskused.php">Oskused</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="admin.php?leht=admin" method="get">
        <div class="form-group">
            <label for="tekst">Sisesta tekst</label>
            <br>
            <input type="text" name="pealkiri" id="pealkiri">
            <br>
            <input type="text" name="alapealkiri" id="alapealkiri">
            <br>
            <input type="text" name="sisu" id="sisu">
            <br>
            <input type="text" name="pealkiri2" id="pealkiri2">
            <br>
            <input type="text" name="alapealkiri2" id="alapealkiri2">
            <br>
            <input type="text" name="sisu2" id="sisu2">
            <br>
            <input type="submit" name="sisestatekst" value="sisesta vajalik" class="btn btn-primary mt-3">
        </div>
    </form>

    <form action="admin.php?leht=admin" method="post">
        <input type="submit" name="reset" value="reset">
    </form>

    <?php
    if (isset($_GET['sisestatekst'])) {
        $pealkiri = $_GET['pealkiri'];
        $alapealkiri = $_GET['alapealkiri'];
        $sisu = $_GET['sisu'];
        $tekst = $pealkiri . "\n" . $alapealkiri . "\n" . $sisu;
        file_put_contents('tekstid.txt', $tekst . PHP_EOL, FILE_APPEND);

        $pealkiri2 = $_GET['pealkiri2'];
        $alapealkiri2 = $_GET['alapealkiri2'];
        $sisu2 = $_GET['sisu2'];
        $tekst2 = $pealkiri2 . "\n" . $alapealkiri2 . "\n" . $sisu2;
        file_put_contents('tekstid.txt', $tekst2 . PHP_EOL, FILE_APPEND);
    }
    if (isset($_POST['reset'])) {
        file_put_contents('tekstid.txt', '');
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</div>
</body>
</html>
