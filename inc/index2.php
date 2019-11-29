<?php

include("connect.php");


  $statement1 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'0-10%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'0-10%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'0-10%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'0-10%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'0-10%\' AND final_result = \'Distinction\' )f');


  $statement2 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'10-20\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'10-20\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'10-20\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'10-20\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'10-20\' AND final_result = \'Distinction\' )f');


  $statement3 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'20-30%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'20-30%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'20-30%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'20-30%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'20-30%\' AND final_result = \'Distinction\' )f');

$statement4 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'30-40%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'30-40%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'30-40%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'30-40%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'30-40%\' AND final_result = \'Distinction\' )f');

$statement5 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'40-50%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'40-50%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'40-50%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'40-50%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'40-50%\' AND final_result = \'Distinction\' )f');

$statement6 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'50-60%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'50-60%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'50-60%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'50-60%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'50-60%\' AND final_result = \'Distinction\' )f');

$statement7 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'60-70%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'60-70%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'60-70%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'60-70%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'60-70%\' AND final_result = \'Distinction\' )f');

$statement8 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'70-80%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'70-80%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'70-80%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'70-80%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'70-80%\' AND final_result = \'Distinction\' )f');

$statement9 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'80-90%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'80-90%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'80-90%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'80-90%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'80-90%\' AND final_result = \'Distinction\' )f');

$statement10 = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, 
  ROUND (w.s /T.Total, 4) AS W1, 
  ROUND (d.s /T.Total, 4) AS D1,
  ROUND (f.s /T.Total, 4) AS F1 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = \'90-100%\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = \'90-100%\' AND final_result = \'Pass\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'90-100%\' AND final_result = \'Withdrawn\' )w,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'90-100%\' AND final_result = \'Distinction\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = \'90-100%\' AND final_result = \'Distinction\' )f');

  oci_execute($statement1);
  oci_execute($statement2);
  oci_execute($statement3);
  oci_execute($statement4);
  oci_execute($statement5);
  oci_execute($statement6);
  oci_execute($statement7);
  oci_execute($statement8);
  oci_execute($statement9);
  oci_execute($statement10);

  while (($row = oci_fetch_object($statement1))) {
    $data1[]= $row;
  }
  while (($row = oci_fetch_object($statement2))) {
    $data2[]= $row;
  }
  while (($row = oci_fetch_object($statement3))) {
    $data3[]= $row;
  }
   while (($row = oci_fetch_object($statement4))) {
    $data4[]= $row;
  }
   while (($row = oci_fetch_object($statement5))) {
    $data5[]= $row;
  }
   while (($row = oci_fetch_object($statement6))) {
    $data6[]= $row;
  }
   while (($row = oci_fetch_object($statement7))) {
    $data7[]= $row;
  }
   while (($row = oci_fetch_object($statement8))) {
    $data8[]= $row;
  } 
  while (($row = oci_fetch_object($statement9))) {
    $data9[]= $row;
  }
  while (($row = oci_fetch_object($statement10))) {
    $data10[]= $row;
  }
  echo json_encode(array('data1'=>$data1,'data2'=>$data2, 'data3'=>$data3,
  'data4'=>$data4,'data5'=>$data5, 'data6'=>$data6, 'data7'=>$data7, 'data8'=>$data8,
  'data9'=>$data9, 'data10'=>$data10));

  oci_close($connection);
  //
  // VERY important to close Oracle Database Connections and free statements!
  // 
  oci_free_statement($statement1);
  oci_free_statement($statement2);
  oci_free_statement($statement3);
  oci_free_statement($statement4);
  oci_free_statement($statement5);
  oci_free_statement($statement6);
  oci_free_statement($statement7);
  oci_free_statement($statement8);
  oci_free_statement($statement9);
  oci_free_statement($statement10);




?>



