<?php

include("connect.php");

  $statement = oci_parse($connection, 'SELECT * FROM
  (SELECT COUNT (id_student) AS Ftotal_1 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'AAA\')C1F,
  (SELECT COUNT (id_student) AS Mtotal_1 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'AAA\')C1M,
  (SELECT COUNT (id_student) AS Ftotal_2 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'BBB\')C2F,
  (SELECT COUNT (id_student) AS Mtotal_2 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'BBB\')C2M,
  (SELECT COUNT (id_student) AS Ftotal_3 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'CCC\')C3F,
  (SELECT COUNT (id_student) AS Mtotal_3 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'CCC\')C3M,
  (SELECT COUNT (id_student) AS Ftotal_4 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'DDD\')C4F,
  (SELECT COUNT (id_student) AS Mtotal_4 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'DDD\')C4M,
  (SELECT COUNT (id_student) AS Ftotal_5 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'EEE\')C5F,
  (SELECT COUNT (id_student) AS Mtotal_5 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'EEE\')C5M,
  (SELECT COUNT (id_student) AS Ftotal_6 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'FFF\')C6F,
  (SELECT COUNT (id_student) AS Mtotal_6 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'FFF\')C6M,
  (SELECT COUNT (id_student) AS Ftotal_7 FROM studentinfo WHERE Gender = \'F\' AND code_module = \'GGG\')C7F,
  (SELECT COUNT (id_student) AS Mtotal_7 FROM studentinfo WHERE Gender = \'M\' AND code_module = \'GGG\')C7M');

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

