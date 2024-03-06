<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" href="yl4css.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .tekst {

    }
    .sub-text {
      color: #666666; /* Hall värv */
      font-size: 1rem; /* Vaiksem fondi suurus */
      margin-top: -10px;
    }
    .lorem {
      overflow-wrap: break-word;
      word-wrap: break-word;
      max-width: 300px;
      font-size: 0.9rem;
    }
    .palk {
      border-radius: 25px;
    background: #8a2be2;
    padding: 20px;
    width: 140px;
    height: 70px;
    color: white;
    }
    .pilt {
      float:right;
      border-radius: 8px;
      width: 400px;
      height: auto;
      margin-top: -200px;
     }
    
     .tekstt {
      text-align: center;
      line-height: 2;
      font-weight: bold;
      margin-bottom: 5px;
      margin-top: 40px;

     }
     .hh {
      text-align: center;
      margin-top: 0px;
     }
    



  </style>
  </head>
  <body>

    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">HiimoNarep.ee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-primary" href="#">Avaleht <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tehtud tööd</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Oskused</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

<div class="container mt-4">
  <div class="row justify-content-center"> 
    <div class="col-md-8"> 
      <h1 class="tekst">Hei, olen Hiimo</h1>
      <p class="sub-text">Veebiarendaja</p> 
      <p class="lorem">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque deleniti consequatur, saepe facilis eos voluptate eum magni odio dicta quo debitis temporibus sapiente rem illo, aliquid quas quaerat minima at.</p>
      <p class="palk"> <i class="fa-solid fa-arrow-right"></i> Palka mind</p>
      <img class="pilt" src="https://as2.ftcdn.net/v2/jpg/00/88/53/89/1000_F_88538986_5Bi4eJ667pocsO3BIlbN4fHKz8yUFSuA.jpg" alt="Pilt"> 
    </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="tekstt"> Minust</h2>
        <p class="hh"> Minu parimad saavutused</p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
