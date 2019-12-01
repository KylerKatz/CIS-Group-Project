<!DOCTYPE html>

<html>

<head>

  <title>Population Trends</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
  <?php
  include("header.php");
  ?>

</header>


<body>
  <div id="Title-container">
    <div clas="title">
      <h2> Class Population</h2>

    </div>

  </div>
  <div id="Graph-text-left">
    <p id="left-text">
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000;">Details: </span> <br>
      This graph separates students by gender for each class and show the trend in each class population over four semesters.
      Not all classes are taught every semester. However, each class in this data has at least 2 semester’s worth of data,
      and some have all four (Due to the data being anonymous, we are unfortunately unable to know the class names, but the data is still useful).<br>
      <br>
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000;">Importance:</span> <br>
      The point of this graph is not only to show the overall population for each class, but we feel that much more in terms of
      teaching can be gained when you examine the ratio between the two genders. This is because <a href="https://stanmed.stanford.edu/2017spring/how-mens-and-womens-brains-are-different.html" target="_blank"> research</a> has shown that males and females
      learn differently due to the different areas present in our brains. Furthermore, different teaching techniques work better for one gender then the other. <br>
      <br>
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000;">Application:</span> <br>
      Even though the class names are anonymous, the hope is that by being able to see the difference in gender population for these classes, this will make teachers and faculty consider gender to be a factor when planning out lessons. Perhaps deploy teaching techniques that better suit the majority of the class population while also still teaching for the minority as well.
    </p>
  </div>

</body>


<?php
include("ClassPopulationGraph.php");
?>





<footer>
  <?php

  include("footer.php")
  ?>
</footer>

</html>