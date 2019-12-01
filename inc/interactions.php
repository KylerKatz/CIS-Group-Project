<!DOCTYPE html>
<html lang="en">

<head>
  <title>Interaction Trends</title>

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
      <h2> Course Interactions</h2>

    </div>
  </div>

  <div id="Graph-text-left-Interactions">
    <p id="left-text">
      <span style="font-size: 25px; color:white; text-shadow: 2px 2px #000000;">Details: </span> <br>
      This graph has twelve different groups of students who are grouped by the number of times they interacted with the learning material on the
      course website per year. The data in this graph considers both the Spring and Fall semesters for 2013 and 2014 and separates the data by year.
      The scale used in this graph is the percentage of students who passed given their interaction rate. <br>
      <br>
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000;">Importance: </span> <br>
      From the graph we can see that there is a clear trend in the number of interactions and the likelihood of passing.
      We are not saying that this is the only factor that plays into a student’s success. However, it is reasonable to assume that the more time a student puts into
      doing and studying course material the greater chance they have in passing a class.
      One thing we would like to point out with this graph is the marginal gains if not negative gains that are made at a certain point of around 800 interactions.
      This is somewhat surprising to see because given the first part of the graph for each year, it is rational to assume that studying more would lead to a higher
      chance of passing but we see that there is a limit where too much studying might be negative.<br>
      <br>
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000; ">Application: </span> <br>
      Given this data, it might be wise to try to tweak the course material in a way that doesn’t cause over studying or other ways to keep students engaged.
      Since, even though there is an upward trend for most of the graph, when you look at the graph, at most ~ 62% of the people in a group are passing.
      Once again, we are not saying this is the only way, however, there is a good chance that this has an impact.
    </p>
  </div>

</body>


<?php
include("site1.php");
?>


<footer>
  <?php

  include("footer.php")
  ?>
</footer>