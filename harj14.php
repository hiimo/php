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
                 $imagedir = 'pildid/';
               function suvaPilt($dir) {
                $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                $randomImage = $images[array_rand($images)];
                return $randomImage;
            }
    
            function pisipilt($dir, $columns = 3) {
                $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                $rowCount = ceil(count($images) / $columns);
                for ($i = 0; $i < $rowCount; $i++) {
                    echo '<div class="row">';
                    for ($j = 0; $j < $columns; $j++) {
                        $index = $i * $columns + $j;
                        if ($index < count($images)) {
                            echo '<div class="col">';
                            echo '<a href="' . $images[$index] . '" target="_blank">';
                            echo '<img src="' . $images[$index] . '" class="thumbnail" onclick="pisipiltSuureks(\'' . $images[$index] . '\');">';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
                    echo '</div>';
                }
            }
            ?>
            
            <script>
                function pisipiltSuureks(imageSrc) {
                    var largeImageWindow = window.open('', '_blank');
                    largeImageWindow.document.write('<img src="' + imageSrc + '" style="max-width: 100%;">');
                }
            </script>
    
            <h2>Suvaline pilt:</h2>
            <img src="<?php echo suvaPilt($imagedir); ?>" style="max-width: 100%;">
    
            <h2>Pisipildid veergudes:</h2>
            <?php pisipilt($imagedir, 3); ?>
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
