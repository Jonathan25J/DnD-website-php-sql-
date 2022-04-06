<!DOCTYPE html>
<html lang="en">

<head>
  <title>Roll calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/2.css">
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
<div class="centered">Roll calculator</div>
</div>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    background-color: #262c2c;
  }

  .bg {

    background-image: url("../pictures/2.jpg");
    width: 100%;
    height: 40%;

    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 400px;

  }

  .container {
    left: 25%;
    padding: 100px;
    text-align: center;
    border: 1px;

  }

  input,
  select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 5%;
    background-color: #FF0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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


  <?php
  if (isset($_POST['sub'])) {
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $oprnd = $_POST['sub'];
    if ($oprnd == "+")
      $ans = $num1 + $num2;
    else if ($oprnd == "-")
      $ans = $num1 - $num2;
    else if ($oprnd == "x")
      $ans = $num1 * $num2;
    else if ($oprnd == "/")
      $ans = $num1 / $num2;
  } ?>

<font color="white">
    <div class="container" {border-color: rgb(201, 76, 76);}>
      <form method="post" action="">
        <h1>Roll Calculator</h1>
        <br>
        Je roll: <input type="number" name="n1" value="" required>
        <br>
        Modifiers: <input type="number" name="n2" value="" required>
        <br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/">
        <br>
        <br>Result: <input type='text' value="<?php if(isset($ans)) echo $ans; ?>"><br>
      </form>
    </div>
</font>


    <div id="footer">
    <div>
      <p style="font-family:DnD"><a href="https://www.dndbeyond.com/">D&D Beyond</a></p>
    </div>
</body>

</html>