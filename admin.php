
<!doctype html>
<html lang="en">
    <head>
        <title>Admin</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-dark" href="#"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar-brand" href='#'>
                            hnarep.ee
                        </a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="yl4cv.php">Avaleht</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tehtud.php?leht=tehtud">Tehtud tööd</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="oskused.php?leht=oskused">Oskused</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="kontaktid.php?leht=konntakt">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php?leht=admin">Admin</a>
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
                    <input type="submit" name="sisestatekst" value="sisesta vajalik" class="btn btn-primary mt-3"></button>
                </div>
            </form>



            <form action="admin.php?leht=admin" method="post" enctype="multipart/form-data">
                <input type="file" name="picture" id="picture">
                <input type="submit" name="sisestapilt" value="sisesta pildid" class="btn btn-primary mt-3"></button>
            </form>
            <br>
            <form action="admin.php?leht=admin" method="post" enctype="multipart/form-data">
                <input type="file" name="picture2" id="picture2">
                <input type="submit" name="sisestapilt2" value="sisesta pildid" class="btn btn-primary mt-3"></button>
            </form>
            <br>


            <form action="admin.php?leht=admin" method="post">
                <input type="submit" name="reset" value="reset">
            </form>

        <?php
            if(isset($_GET['sisestatekst'])){

                $pealkiri = $_GET['pealkiri'];
                $alapealkiri = $_GET['alapealkiri'];
                $sisu = $_GET['sisu'];
                $tekst = $pealkiri."\n".$alapealkiri."\n".$sisu;
                file_put_contents('tekstid.txt', $tekst.PHP_EOL, FILE_APPEND);


                $pealkiri2 = $_GET['pealkiri2'];
                $alapealkiri2 = $_GET['alapealkiri2'];
                $sisu2 = $_GET['sisu2'];
                $tekst2 = $pealkiri2."\n".$alapealkiri2."\n".$sisu2;
                file_put_contents('tekstid.txt', $tekst2.PHP_EOL, FILE_APPEND);
            }
            
           

            if (isset($_POST['sisestapilt'])) {
                $sihtkataloog = "";
                $sihtfail = $sihtkataloog . basename($_FILES["picture"]["name"]); 
                $yleslaadimine = 1;
                $pildiFailiTüüp = strtolower(pathinfo($sihtfail, PATHINFO_EXTENSION));


                if ($_FILES["picture"]["size"] > 500000) {
                    echo "Fail on liiga suur";
                    $yleslaadimine = 0;
                }
                if ($yleslaadimine == 0) {
                    echo "Faili ei laetud üles";

                } else {
                    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $sihtfail)) {
                        $failiasukoht = $sihtkataloog . basename($_FILES["picture"]["name"]);
                        file_put_contents('tekstid.txt', $failiasukoht.PHP_EOL, FILE_APPEND);
                        echo "Failid üles laetud";
                    } else {
                        echo "Midagi läks valesti";
                    }
                }

            }

            if (isset($_POST['sisestapilt2'])){
                $sihtkataloog = "";
                $sihtfail = $sihtkataloog . basename($_FILES["picture2"]["name"]);
                $yleslaadimine = 1;
                $pildifailityyp = strtolower(pathinfo($sihtfail, PATHINFO_EXTENSION));

                if ($_FILES["picture2"]["size"] > 500000) {
                    echo "Fail on liiga suur";
                    $yleslaadimine = 0;
                }

                if ($yleslaadimine == 0) {
                    echo "Faili ei laetud üles";

                } else {
                    if (move_uploaded_file($_FILES["picture2"]["tmp_name"], $sihtfail)) {
                        $failiasukoht = $sihtkataloog . basename($_FILES["picture2"]["name"]);
                        file_put_contents('tekstid.txt', $failiasukoht.PHP_EOL, FILE_APPEND);
                        echo "Failid üles laetud";
                    } else {
                        echo "Midagi läks valesti";
                    }
                }
            }

            if(isset($_POST['reset'])){
                file_put_contents('tekstid.txt', '');
            }
        ?>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

    </body>
</html>
