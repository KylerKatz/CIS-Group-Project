<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Open University Learning Trends</title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<header>
<?php  
include("header.php");
?>
</header>


<body >
<div id="welcome-text-block">
      <p id = "left-text"> Hello and welcome to the Open University Learning Trends website! 
        The purpose of this website is to offer teachers and faculty Insight into how metrics such as age, class demographics, and course interactions can affect student learning outcomes. 
        The data that these trends are based off is from the <a href = "https://analyse.kmi.open.ac.uk/open_dataset" target = "_blank" > Open University Learning Analytics dataset</a> which is data from an online school for students in the United Kingdom. 
        This is anonymized data from over thirty-thousand students across two years and four semesters. 
        We hope that you are able to take away newfound information that can be applied to your future teaching.     </p>
  </div>

  
<!-- <div class = "slider-container">
    <div class = "image-container">
      <img src = "../images/1.jpg" class = "slider-image">
      <img src = "../images/2.jpg" class = "slider-image">
      <img src = "../images/3.jpg" class = "slider-image">
    </div>

</div> -->

  



  
</body>

<footer>
  <?php
  
  include("footer.php")
  ?>
</footer>


</html>