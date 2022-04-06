<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/registration.css">
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
<div class="centered">Registered</div>
</div>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    background-color: #262c2c;
  }

  .bg {

    background-image: url("../pictures/home.jpg");
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
        <a class="nav-link" href="../pages/1.php">Dice guesser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/2.php">Roll calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/3.php">Next session</a>
        </li>
      </ul>
    </div>
  </nav>
  </head>

  <font color="white" face="Verdana" size=3>
  <p style="font-family:DnD; font-size:40px;" class="text">Registered members</p>
  <?php
  $conn = new mysqli('localhost','root','','unicorn247');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT charactername, classlevel, race, background, health, armorclass FROM dnd_data";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "Charactername: " . $row["charactername"] . " - Class & level: " . $row["classlevel"] . " - Race: " . $row["race"] . " - Background: " . $row["background"] . " - Health: " . $row["health"] . " - Armor class: " . $row["armorclass"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  ?>
</font>



  <div id="footer">
    <div>
      <p style="font-family:DnD"><a href="https://www.dndbeyond.com/">D&D Beyond</a></p>
    </div>
</body>

</html>