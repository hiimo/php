<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <h1>jagamine</h1>
        <form action="#" method="get">
            <label for ="a" >arv 1</label>
            <input type = "number" name ="a" id="a"> <br>
            <label for ="b" >arv 2</label>
            <input type = "number" name ="b" id="b"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
     <h1>kumb vanem</h1>
        <form action="#" method="get">
            <label for ="a" >vanus 1</label>
            <input type = "number" name ="a1" id="a1"> <br>
            <label for ="b" >vanus 2</label>
            <input type = "number" name ="b1" id="b1"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
    <h1>ristkulk v ruut</h1>
        <form action="#" method="get">
            <label for ="a" >esimene kylg</label>
            <input type = "number" name ="a2" id="a2"> <br>
            <label for ="b" >teine kylg</label>
            <input type = "number" name ="b2" id="b2"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
     <h1>rsitklyik v ruut 2</h1>
        <form action="#" method="get">
            <label for ="a" >arv 1</label>
            <input type = "number" name ="a3" id="a3"> <br>
            <label for ="b" >arv 2</label>
            <input type = "number" name ="b3" id="b3"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
    <h1>juubel</h1>
        <form action="#" method="get">
            <label for ="a" >synniaasata</label>
            <input type = "number" name ="a4" id="a4"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">
     <h1>hinne</h1>
        <form action="#" method="get">
            <label for ="a" >kt punktide arv</label>
            <input type = "number" name ="a5" id="a5"> <br>
            <input type="submit" class="btn btn-success my-2" value="arvuta">


            <?php
     if(!empty($_GET['a'])){
        $a = $_GET ['a'];
        $b = $_GET ['b'];
        $jaga = ($a/$b);
        echo "<br>jagamis arv on ", $jaga ;}

        $a1 = $_GET ['a1']; 
	      $b1 = $_GET ['b1'];
	
	    switch($a1){ 
	    case ($b1 < $a1): printf("<br> %d on vanem kui %d", $a1, $b1 );
	    break; 
	    case ($b1 > $a1): printf("<br> %d on noorem kui %d", $a1, $b1 );
	    break; 
	    default: echo '<br>nad on sama vanused'; 
	    } 
      
      $a2 = $_GET ['a2']; 
      $b2 = $_GET ['b2'];

      $jaak = ($a2+$b2)%2;
      if($jaak == 0){
      echo '<br>see on ruut';
      } else {
      echo '<br>see on ristkylik';
      }  


      $a3 = $_GET ['a3']; 
      $b3 = $_GET ['b3'];

      $jaak1 = ($a3+$b3)%2;
      if($jaak1 == 0){
      echo '<br>see on ruut';
      } else {
      echo '<br>see on ristkylik';
      }  



  
      $a5 = $_GET ['a5']; 
      if($a5 >= 10){
      echo '<br>SUPER!';
      } else if($a5 >= 5) {
      echo '<br>Tehtud!';
      } else {
      echo '<br>mitterahuldav';  
      }  

      $a4 = $_GET ['a4']; 
      $jaak = $a4%2;
      
      if($jaak == 0){
      echo '<br>tal on juubel';
      } else if($jaak == 5){
      echo '<br>tal on juubel';
      }else {
      echo '<br>ei ole juubel';
      }  



        ?>






            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>