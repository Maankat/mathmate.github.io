<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="utf-8"/>
    <meta charset="utf-8"/>
    <title>MathMate </title>
</head>
<body>
<?php
session_start();
if($_SESSION['ingelogd'] != "ja"){

    header("Location:../../index.php");
}



?>
    
    
    
   
     <a><img src="../img/logo1.png" id="logo" width="100%"></a> 
 <img src="../img/alphabet-black-and-white-business-256369.jpg" id="banner">
    <div class="row">
  
    </div>  
<nav class="navbar navbar-expand-lg navbar-light bg-light">

 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../presentatie/html/index.php">presentatie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          catogorieën
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../../catogorieen/optellen en aftrekken/PHP/index.php">optellen/aftrekken</a>
          <a class="dropdown-item" href="../../catogorieen/rad van fortuin/PHP/index.php">rad van fortuin</a>
          <a class="dropdown-item" href="../../catogorieen/rekena pagina/PHP/index.php">keer en deel sommen</a>
          <a class="dropdown-item" href="#">pittige rekenpagina</a>
          <a class="dropdown-item" href="../../catogorieen/machtenreeks/PHP/index.php">machtenreeks</a>
          <a class="dropdown-item" href="../../catogorieen/kwadraadreeks/PHP/index.php">kwadraadreeks</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="../../catogorieen/priemgetallen/PHP/index.php">Priemgetallen</a>
          <a class="dropdown-item" href="../../catogorieen/Fibonacci/PHP/index.php">Reeks van fibonacci</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../../PHP/uitloggen.php">uitloggen</a>
      </li>
  
    </ul>
     
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		
				
					<button type="button" class="btn btn-primary raised">search</button>
					
				
			
    </form>
 
  </div>
</nav>

  
    
<div class="box">
    
   
    <h1>Lorem ipsum</h1>
    <h3>Home</h3>
<br>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>
    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis<br>
    natoque penatibus et magnis dis parturient montes, nascetur<br>
    ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,<br> 
    pretium quis, sem. Nulla consequat massa quis enim. <br>
    Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.<br> 
    In enim justo, rhoncus ut, imperdiet a, venenatis vitae,<br>
    justo. Nullam dictum felis eu pede mollis pretium.<br> 
        Integer tincidunt. Cras dapibus. Vivamus</p>   
</div>
    
<div class="footer">
<p>Copyright © 2009 - 2018 - All Rights Reserved - MathMate.</p>    

    
    </div>
    





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>