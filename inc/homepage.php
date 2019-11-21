<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

  <title>Open University Learning Analytics| Group 4 Project</title>
  
  <?php  
include("header.php");
?>
</head>


<body>
<div class="tiles-grid ml-10" align="center">
    <div data-role="tile" data-size="large" style="background-color: #4a00b3">
      <span class="branding-bar"> Gender </span>
    </div>
    <div  data-role="tile" data-size="large"  style="background-color: #4a00b3">
    <span class="branding-bar"> Year </span>
    </div>
    <div  data-role="tile" data-size="large"  style="background-color: #4a00b3">
    <span class="branding-bar"> Education Background </span>
    </div></div>
    <br>
</div>
<div class="tiles-grid  ml-10" align="center" >
    <div data-role="tile" data-size="large"  style="background-color: #4a00b3">
    <span class="branding-bar"> Learning Disability </span>
    </div>
    <div data-role="tile" data-size="large"  style="background-color: #4a00b3">
    <span class="branding-bar"> My students </span>
    </div>
    <div data-role="tile" data-size="large"  style="background-color: #4a00b3">
    <span class="branding-bar"> Age </span>
    </div>
  </div>
  <br><br>
  <footer class="container-fluid text-center">
    </footer>
  <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

</body>
</html>