<?php

include("connect.php");

$statement = oci_parse($connection, 'SELECT 
  ROUND (p.s /T.Total, 4) AS P1, ROUND (p1.s /T.Total, 4) AS P2, ROUND (p2.s /T.Total, 4) AS P3, 
  ROUND (w.s /T.Total, 4) AS W1, ROUND (w1.s /T.Total, 4) AS W2, ROUND (w2.s /T.Total, 4) AS W3, 
  ROUND (d.s /T.Total, 4) AS D1, ROUND (d1.s /T.Total, 4) AS D2, ROUND (d2.s /T.Total, 4) AS D3,
  ROUND (f.s /T.Total, 4) AS F1, ROUND (f1.s /T.Total, 4) AS F2, ROUND (f2.s /T.Total, 4) AS F3 FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE age_band = \'0-35\' AND  code_presentation = \'2013J\')T,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE age_band = \'0-35\' AND final_result = \'Pass\' AND code_presentation = \'2013J\' )p,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'0-35\' AND final_result = \'Withdrawn\' AND code_presentation = \'2013J\' )w
  ,(SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'0-35\' AND final_result = \'Distinction\' AND code_presentation = \'2013J\' )d,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'0-35\' AND final_result = \'Fail\' AND code_presentation = \'2013J\')f,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE age_band = \'35-55\' AND final_result = \'Pass\' AND code_presentation = \'2013J\' )p1,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'35-55\' AND final_result = \'Withdrawn\' AND code_presentation = \'2013J\' )w1
  ,(SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'35-55\' AND final_result = \'Distinction\' AND code_presentation = \'2013J\' )d1,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'35-55\' AND final_result = \'Fail\' AND code_presentation = \'2013J\')f1,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE age_band = \'55<=\' AND final_result = \'Pass\' AND code_presentation = \'2013J\' )p2,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'55<=\' AND final_result = \'Withdrawn\' AND code_presentation = \'2013J\' )w2
  ,(SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'55<=\' AND final_result = \'Distinction\' AND code_presentation = \'2013J\' )d2,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE age_band = \'55<=\' AND final_result = \'Fail\' AND code_presentation = \'2013J\')f2');
  
  oci_execute($statement);

  while (($row = oci_fetch_object($statement))) {
   
    $data[]= $row;

  }



  oci_close($connection);

  //
  // VERY important to close Oracle Database Connections and free statements!
  // 
  oci_free_statement($statement);

  echo json_encode($data);

?>

