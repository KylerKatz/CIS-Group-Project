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

<body>
  

<span>
<span id="welcome-text-block">
      <p id = "left-text"> Hello and welcome to the Open University Learning Trends website! 
        The purpose of this website is to offer teachers and faculty Insight into how metrics such as age, class demographics, and course interactions can affect student learning outcomes. 
        The data that these trends are based off is from the <a href = "https://analyse.kmi.open.ac.uk/open_dataset" target = "_blank" > Open University Learning Analytics dataset</a> which is data from an online school for students in the United Kingdom. 
        This is anonymized data from over thirty-thousand students across two years and four semesters. 
        We hope that you are able to take away newfound information that can be applied to your future teaching.     </p>
  
</span>

<span class="slider">

    <div id="img">
      <img src = "../images/1.jpg" class = "slider-image">
      <img src = "../images/2.jpg" class = "slider-image">
      <img src = "../images/3.jpg" class = "slider-image">
    </div>


</span> 
</span>
</body>

  <script>

    var images = ['../images/1.jpg', '../images/2.jpg', '../images/3.jpg'];

    var x = 0;

    var imgs = document.getElementById('img');

    setInterval(slider, 3500);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";


    }


  </script>



<footer>
  <?php
  
  include("footer.php")
  ?>
</footer>


</html>