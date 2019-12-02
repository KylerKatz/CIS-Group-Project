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
      This graph has twelve different groups of students who are grouped by the number of times they have interacted with learning materials on the
      course website in a given year. We call this the "interaction rate" for the student.  The data in this graph considers both the Spring and Fall 
	  semesters for 2013 and 2014 and separates the data by year.
      The scale used in this graph is the percentage of students who passed given their interaction rate. <br>
      <br>
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000;">Importance: </span> <br>
      From the graph we can see that there is a clear trend between the rate at which students interact with the material and the likelihood of passing.
      We are not saying that this is the only factor that plays into the success of a student, nor are we able to prove causation rather than correlation.
	  However, it is reasonable to assume that the more time a student puts into
      studying course material, the greater chance they have in passing a class.
      One thing we would like to point out with this graph is the marginal (if not negative) gains that are made at a certain point, around 800 interactions.
	  We can imagine that there are two possible reasons why there might be a decrease in positive outcomes at the very top of the interactions spectrum- 
	  diminishing returns to spending so much time online, and extreme amounts of time being put in specifically by those students who needed the most help to begin with.
	  Students doing very well in a given course may not need thousands of hours of studying to learn the content, in other words.
	  <br>
      <br>
      <span style="font-size: 25px; color:white;   text-shadow: 2px 2px #000000; ">Application: </span> <br>
      Given this data, it might be wise to try to tweak the course material in a way that does not cause "overstudying," or in a way that allows alternative methods to keep students engaged.
      Although there is an upward trend for most of the graph, there remains work to be done as at most ~62% of the people in each year group are passing.
      Our method of analyzing data may help in the future to determine best practices in assigning coursework amounts, grading procedures, and other policies for improving outcomes.
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