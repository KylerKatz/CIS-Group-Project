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
P12.pass / T12.total AS "INT12",
P13.pass / T13.total AS "INT13",  
P14.pass / T14.total AS "INT14",  
P15.pass / T15.total AS "INT15",  
P16.pass / T16.total AS "INT16",  
P17.pass / T17.total AS "INT17",  
P18.pass / T18.total AS "INT18",  
P19.pass / T19.total AS "INT19",  
P20.pass / T20.total AS "INT20",  
P21.pass / T21.total AS "INT21",  
P22.pass / T22.total AS "INT22",  
P23.pass / T23.total AS "INT23",  
P24.pass / T24.total AS "INT24"  




FROM
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1 AND 100 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P1,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1 AND 100 AND studentinfo.code_presentation LIKE \'%2013%\' ))T1,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 101 AND 200 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P2,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 101 AND 200 AND studentinfo.code_presentation LIKE \'%2013%\' ))T2,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 201 AND 300 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P3,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 201 AND 300 AND studentinfo.code_presentation LIKE \'%2013%\' ))T3,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 301 AND 400 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P4,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 301 AND 400 AND studentinfo.code_presentation LIKE \'%2013%\' ))T4,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 401 AND 500 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P5,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 401 AND 500 AND studentinfo.code_presentation LIKE \'%2013%\' ))T5,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 501 AND 600 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P6,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 501 AND 600 AND studentinfo.code_presentation LIKE \'%2013%\' ))T6,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 601 AND 700 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P7,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 601 AND 700 AND studentinfo.code_presentation LIKE \'%2013%\' ))T7,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 701 AND 800 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P8,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 701 AND 800 AND studentinfo.code_presentation LIKE \'%2013%\' ))T8,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 801 AND 900 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P9,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 801 AND 900 AND studentinfo.code_presentation LIKE \'%2013%\' ))T9,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 901 AND 1000 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P10,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 901 AND 1000 AND studentinfo.code_presentation LIKE \'%2013%\' ))T10,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1001 AND 1100 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P11,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1001 AND 1100 AND studentinfo.code_presentation LIKE \'%2013%\' ))T11,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1101 AND 1200 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2013%\'))P12,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1101 AND 1200 AND studentinfo.code_presentation LIKE \'%2013%\' ))T12,



(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1 AND 100 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P13,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1 AND 100 AND studentinfo.code_presentation LIKE \'%2014%\' ))T13,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 101 AND 200 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P14,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 101 AND 200 AND studentinfo.code_presentation LIKE \'%2014%\' ))T14,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 201 AND 300 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P15,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 201 AND 300 AND studentinfo.code_presentation LIKE \'%2014%\' ))T15,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 301 AND 400 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P16,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 301 AND 400 AND studentinfo.code_presentation LIKE \'%2014%\' ))T16,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 401 AND 500 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P17,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 401 AND 500 AND studentinfo.code_presentation LIKE \'%2014%\' ))T17,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 501 AND 600 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P18,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 501 AND 600 AND studentinfo.code_presentation LIKE \'%2014%\' ))T18,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 601 AND 700 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P19,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 601 AND 700 AND studentinfo.code_presentation LIKE \'%2014%\' ))T19,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 701 AND 800 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P20,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 701 AND 800 AND studentinfo.code_presentation LIKE \'%2014%\' ))T20,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 801 AND 900 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P21,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 801 AND 900 AND studentinfo.code_presentation LIKE \'%2014%\' ))T21,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 901 AND 1000 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P22,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 901 AND 1000 AND studentinfo.code_presentation LIKE \'%2014%\' ))T22,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1001 AND 1100 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P23,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1001 AND 1100 AND studentinfo.code_presentation LIKE \'%2014%\' ))T23,
(SELECT COUNT (ROWNUM) as pass FROM (SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1101 AND 1200 AND interactions.final_result = \'Pass\' AND studentinfo.code_presentation LIKE \'%2014%\'))P24,
(SELECT COUNT(ROWNUM) AS total FROM(SELECT NUM_TIMES FROM interactions JOIN studentinfo ON interactions.id_student = studentinfo.id_student WHERE NUM_TIMES BETWEEN 1101 AND 1200 AND studentinfo.code_presentation LIKE \'%2014%\' ))T24



  ');

oci_execute($statement);

$data = array();
while (($row = oci_fetch_object($statement))) {
  $data[] = $row;
}

//
// VERY important to close Oracle Database Connections and free statements!
//
oci_free_statement($statement);
oci_close($connection);
echo json_encode($data);
