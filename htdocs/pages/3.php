<!DOCTYPE html>
<html lang="en">

<head>
  <title>3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="icon" href="https://icon-library.com/images/dnd-icon/dnd-icon-0.jpg">
</head>
</div>
<div class="bottom-left"> </div>
<div class="top-left"> </div>
<div class="top-right"> </div>
<div class="bottom-right"> </div>
<div class="centered">Next DnD session</div>
</div>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    background-color: #269FC9;
  }

  .bg {

    background-image: url("../pictures/3_.jpg");
    width: 100%;
    height: 40%;

    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 400px;

  }

  #footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px;
    /* Height of the footer */
    background-color: rgb(218, 52, 52);
    padding: 10px;
    text-align: center;
    font-size: 25px;
    color: rgb(0, 0, 0);
  }
</style>

<head>

<body>
  <div class="bg"></div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <a class="nav-link" href="./1.php">Dice guesser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./2.php">Roll calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./3.php">Next session</a>
        </li>
      </ul>
    </div>
  </nav>

  </head>


  <div class="container p-3 my-3 bg-primary text-white">
    <h1><span>Current time</span></h1>
    <h2 style="color:black; font-size:35px; font-family:DnD;"><span><?php
                                                                    echo date("h : i : s a");
                                                                    header("Refresh:1")
                                                                    ?></span></h2>
  </div>

  <div class="container p-3 my-3 bg-primary text-white">
    <h1><span>Time until next session</span></h1>
    <h2 style="color:black; font-size:35px; font-family:DnD;"><span><?php
                                                                    $session = strtotime("2022-05-01 12:00:00+0400");
                                                                    $secondsLeft = $session - time();
                                                                    $days = floor($secondsLeft / (60*60*24));
                                                                    $hours = floor(($secondsLeft - ($days * 60 * 60 * 24)) / (60*60));
                                                                    echo "$days days and $hours hours left until next session";
                                                                    ?></span></h2>
  </div>
  <br></br>
<br></br>
<br></br>



  <div id="footer">
    <div>
      <p style="font-family:DnD"><a href="https://www.dndbeyond.com/">D&D Beyond</a></p>
    </div>
</body>

</html>