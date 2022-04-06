<!DOCTYPE html>
<html lang="en">

<head>
  <title>1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/1.css">
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
<div class="centered">Dice guesser</div>
</div>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    background-color: #262c2c;
  }

  .bg {

    background-image: url("../pictures/1.jpg");
    width: 100%;
    height: 40%;

    background-position: top;
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
  <font color="white" face="Verdana">
    <div class="container">
      <h2>Dice guesser</h2>
      <p>Try to guess the number and dice!</p>
      <form action="" method="post">
        <div class="row">
          <div class="col">
            <input type="number" class="form-control" placeholder="D4" name="D4" min="1" max="4">
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="D6" name="D6" min="1" max="6">
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="D8" name="D8" min="1" max="8">
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="D10" name="D10" min="1" max="10">
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="D12" name="D12" min="1" max="12">
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="D20" name="D20" min="1" max="20">
          </div>
          <br></br>
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <input type="submit" class="btn btn-primary" name="D" value="Guess" />
            </div>
          </div>
      </form>
    </div>
    </div>

    <?php

    if (isset($_POST['D'])) {

      if ($_POST['D4'] > 0) {
        $dice = $_POST['D4'];
        $rand = rand(1, 4);
        if ($dice == $rand) {
          echo "<br>" . "D1: The right guess, " . $rand . "!";
        } else {
          echo "<br>" . "D1: You guessed wrong: " . $rand . ", your chosen number: " . $dice . "!";
        }
      }




      if ($_POST['D6'] > 0) {
        $dice = $_POST['D6'];
        $rand = rand(1, 6);
        if ($dice == $rand) {
          echo "<br>" . "D6: The right guess, " . $rand . "!";
        } else {
          echo "<br>" . "D6: You guessed wrong: " . $rand . ", your chosen number: " . $dice . "!";
        }
      }



      if ($_POST['D8'] > 0) {
        $dice = $_POST['D8'];
        $rand = rand(1, 8);
        if ($dice == $rand) {
          echo "<br>" . "D8: The right guess, " . $rand . "!";
        } else {
          echo "<br>" . "D8: You guessed wrong: " . $rand . ", your chosen number: " . $dice . "!";
        }
      }


      if ($_POST['D10'] > 0) {
        $dice = $_POST['D10'];
        $rand = rand(1, 10);
        if ($dice == $rand) {
          echo "<br>" . "D10: The right guess, " . $rand . "!";
        } else {
          echo "<br>" . "D10: You guessed wrong: " . $rand . ", your chosen number: " . $dice . "!";
        }
      }


      if ($_POST['D12'] > 0) {
        $dice = $_POST['D12'];
        $rand = rand(1, 12);
        if ($dice == $rand) {
          echo "<br>" . "D12: The right guess, " . $rand . "!";
        } else {
          echo "<br>" . "D12: You guessed wrong: " . $rand . ", your chosen number: " . $dice . "!";
        }

        
      }
      if ($_POST['D20'] > 0) {
        $dice = $_POST['D20'];
        $rand = rand(1, 20);
        if ($dice == $rand) {
          echo "<br>" . "D20: The right guess, " . $rand . "!";
        } else {
          echo "<br>" . "D20: You guessed wrong: " . $rand . ", your chosen number: " . $dice . "!";
        }
      }
    }


    ?>
  </font>
<br></br>
<br></br>
<br></br>
<div id="footer">
    <div>
      <p style="font-family:DnD"><a href="https://www.dndbeyond.com/">D&D Beyond</a></p>
    </div>
</body>

</html>