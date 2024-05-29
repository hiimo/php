<!doctype html>
<html lang="en">
    <head>
        <title>harj14</title>
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
            <h1>pilid</h1>
            <div class="row">
                <?php
                $pildid1 = 'pildid/';
                $asukoht = opendir($pildid1);
                $pildid2 = array();
                while ($fail = readdir($asukoht)){
                    if ($fail != '.' && $fail != '..'){
                        array_push($pildid2, $fail);
                    }
                }
                for ($i = 1; $i <= 3; $i++) {
                    $rand = rand(0, 5);
                    echo "<div class='col-md-4'>
                    <a href='pildid/".$pildid2[$rand]."'>
                    <img src='pildid/".$pildid2[$rand]."' class='img-fluid'/>
                    </div>";
                }


                ?>
        </div>
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