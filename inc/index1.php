<?php

include("connect.php");

  $statement = oci_parse($connection, 'SELECT P1.pass / T1.total AS "INT1", 
  P2.pass / T2.total AS "INT2", 
  P3.pass / T3.total AS "INT3",   
  P4.pass / T4.total AS "INT4",  
  P5.pass / T5.total AS "INT5",  
  P6.pass / T6.total AS "INT6",  
  P7.pass / T7.total AS "INT7",  
  P8.pass / T8.total AS "INT8",  
  P9.pass / T9.total AS "INT9",  
  P10.pass / T10.total AS "INT10",
  P11.pass / T11.total AS "INT11",
  P12.pass / T12.total AS "INT12"  
  FROM
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES < 100 AND interactions.final_result = \'Pass\'))P1,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES < 100))T1,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 100 AND 200 AND interactions.final_result = \'Pass\'))P2,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 100 AND 200))T2,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 200 AND 300 AND interactions.final_result = \'Pass\'))P3,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 200 AND 300))T3,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 300 AND 400 AND interactions.final_result = \'Pass\'))P4,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 300 AND 400))T4,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 400 AND 500 AND interactions.final_result = \'Pass\'))P5,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 400 AND 500))T5,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 500 AND 600 AND interactions.final_result = \'Pass\'))P6,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 500 AND 600))T6,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 600 AND 700 AND interactions.final_result = \'Pass\'))P7,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 600 AND 700))T7,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 700 AND 800 AND interactions.final_result = \'Pass\'))P8,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 700 AND 800))T8,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 800 AND 900 AND interactions.final_result = \'Pass\'))P9,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 800 AND 900))T9,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 900 AND 1000 AND interactions.final_result = \'Pass\'))P10,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 900 AND 1000))T10,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 1000 AND 1100 AND interactions.final_result = \'Pass\'))P11,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 1000 AND 1100))T11,
  (SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 1100 AND 1200 AND interactions.final_result = \'Pass\'))P12,
  (SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions WHERE NUM_TIMES BETWEEN 1100 AND 1200))T12
  ');

  oci_execute($statement);
  
  $data = array();
  while (($row = oci_fetch_object($statement))) {
      $data[]= $row;
  }
  
  //
  // VERY important to close Oracle Database Connections and free statements!
  //
  oci_free_statement($statement);
  oci_close($connection);
  echo json_encode($data);

?>

