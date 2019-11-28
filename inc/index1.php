<?php

include("connect.php");

  $statement = oci_parse($connection, 'SELECT P1.pass / T1.total AS INT1 , P2.pass / T2.total AS INT2, P3.pass / T3.total AS INT3, P4.pass / T4.total AS INT4  FROM
  (SELECT COUNT(pass100) AS pass FROM (SELECT id_student as all100, COUNT(id_student) FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) < 100), (SELECT id_student as pass100 FROM kkatz.studentinfo WHERE final_result = \'Pass\' GROUP BY (id_student))WHERE pass100 = all100)P1,
  (SELECT COUNT(rownum) AS total FROM (SELECT COUNT (id_student) as c1 FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) < 100))T1,
  (SELECT COUNT(pass100) AS pass FROM (SELECT id_student as all100, COUNT(id_student) FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) BETWEEN 100 AND 200), (SELECT id_student as pass100 FROM kkatz.studentinfo WHERE final_result = \'Pass\' GROUP BY (id_student))WHERE pass100 = all100)P2,
  (SELECT COUNT(rownum) AS total FROM (SELECT COUNT (id_student) as c1 FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) BETWEEN 100 AND 200))T2,
  (SELECT COUNT(pass100) AS pass FROM (SELECT id_student as all100, COUNT(id_student) FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) BETWEEN 200 AND 300), (SELECT id_student as pass100 FROM kkatz.studentinfo WHERE final_result = \'Pass\' GROUP BY (id_student))WHERE pass100 = all100)P3,
  (SELECT COUNT(rownum) AS total FROM (SELECT COUNT (id_student) as c1 FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) BETWEEN 200 AND 300))T3,
  (SELECT COUNT(pass100) AS pass FROM (SELECT id_student as all100, COUNT(id_student) FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) BETWEEN 300 AND 400), (SELECT id_student as pass100 FROM kkatz.studentinfo WHERE final_result = \'Pass\' GROUP BY (id_student))WHERE pass100 = all100)P4,
  (SELECT COUNT(rownum) AS total FROM (SELECT COUNT (id_student) as c1 FROM kkatz.studentVLE GROUP BY (id_student) HAVING COUNT (id_student) BETWEEN 300 AND 400))T4');

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

