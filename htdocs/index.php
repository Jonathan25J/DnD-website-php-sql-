<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/home.css">
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
<div class="centered">Member registration</div>
</div>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    background-color: #262c2c;
  }

  .bg {

    background-image: url("./pictures/home.jpg");
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
          <a class="nav-link" href="./index.php">Home</a>
        </li>
        <a class="nav-link" href="./pages/1.php">Dice guesser</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/2.php">Roll calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./pages/3.php">Next session</a>
        </li>
      </ul>
    </div>
  </nav>
  </head>

<font color="white">
  <div class="container">
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>DnD Form</h1>
        </div>
        <div class="panel-body">
          <form action="database_connection.php" method="post">
            <div class="form-group">
              <label for="firstName">Character name</label>
              <input type="text" class="form-control" id="charactername" name="charactername" />
            </div>
            <div class="form-group">
              <label for="lastName">Class & level</label>
              <input type="text" class="form-control" id="classlevel" name="classlevel" />
            </div>
            <div class="form-group">
              <label for="email">Race</label>
              <input type="text" class="form-control" id="race" name="race" />
            </div>
            <div class="form-group">
              <label for="password">Background</label>
              <input type="text" class="form-control" id="background" name="background" />
            </div>
            <div class="form-group">
              <label for="number">Health</label>
              <input type="number" class="form-control" id="health" name="health" min="1" />
            </div>
            <div class="form-group">
              <label for="number">Armor class</label>
              <input type="number" class="form-control" id="armorclass" name="armorclass" min="1"  />
            </div>
            <br></br>
            <input type="submit" class="btn btn-primary" />
          </form>
          <br></br>       <br></br> 
        </div>
      </div>
    </div>
  </div>
</font>

  <div id="footer">
    <div>
      <p style="font-family:DnD"><a href="https://www.dndbeyond.com/">D&D Beyond</a></p>
    </div>
</body>

</html>