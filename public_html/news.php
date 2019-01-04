<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warriors Nation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: gold;
      padding: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">Warriors Nation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="roster.html">Roster</a></li>
        <li><a href="current.html">Schedule</a></li>
        <li class="active"><a href="news.php">News</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="more.html">More</a></li>
      </ul>
    </div>
  </div>
</nav>  
 
    <h2 style="color:blue"><b><center> Live Warrior Updates</center></b></h2>
    <br>    
<div><center><?php @readfile('http://output57.rssinclude.com/output?type=php&id=1201366&hash=1c1ca106c59cd05271f688e8be7cfe86')?>    
    </center></div>   
    <br>
<?php
// define variables and set to empty values
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
    <h2>Want to stay updated?</h2>
<p>Join the mail list!</p>
<img alt="mail" src="https://paradisusdei.org/wp-content/uploads/2018/07/Mail-Icon.png" width="50px" height="50px"><br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<br>
<?php if(count($_POST)>0) echo "Thank you $name!";
?>
</center>
<br>


<footer class="container-fluid, text-center">
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/01/Golden_State_Warriors_logo.svg/300px-Golden_State_Warriors_logo.svg.png" style="width:5%"><br><br>
    <p>image credits go to NBA.com</p>
</footer>

</body>
</html>
