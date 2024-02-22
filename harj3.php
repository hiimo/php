<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h1>Sisesta trapetsi mõõdud</h1>
        <form action="#" method="get">
            <label for ="a" >Külg A </label>
            <input type = "number" name ="a" id="a"> <br>
            <label for ="b" >Külg b </label>
            <input type = "number" name ="b" id="b"> <br>
            <label for ="H" >Kõrgus</label>
            <input type = "number" name ="h" id="h"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
    <h1>Sisesta ROMB mõõdud</h1>
        <form action="#" method="get">
            <label for ="a1" >Külg A </label>
            <input type = "number" name ="a1" id="a1"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">

    </form>
    <?php
    if(!empty($_GET['a'])){
        $a = $_GET ['a'];
        $b = $_GET ['b'];
        $h = $_GET ['h'];
        $s = (($a+$b)/2)*$h;
        echo "trapetsi pindala on ", $s ;}
        
    if(!empty($_GET['a1'])){
        $a1 = $_GET['a1'];
        $p =($a1*4);
        echo "<br>romb ümbermoot on ", $p;
    }
        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>