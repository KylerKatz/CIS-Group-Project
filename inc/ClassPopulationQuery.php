<?php

include("connect.php");

  $statement = oci_parse($connection, 'SELECT C1F.Ftotal / C1M.Mtotal AS "C1",
  C2F.Ftotal / C2M.Mtotal AS "C2", 
  C3F.Ftotal / C3M.Mtotal AS "C3", 
  C4F.Ftotal / C4M.Mtotal AS "C4", 
  C5F.Ftotal / C5M.Mtotal AS "C5", 
  C6F.Ftotal / C6M.Mtotal AS "C6", 
  C7F.Ftotal / C7M.Mtotal AS "C7" FROM
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'AAA\')C1F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'AAA\')C1M,
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'BBB\')C2F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'BBB\')C2M,
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'CCC\')C3F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'CCC\')C3M,
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'DDD\')C4F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'DDD\')C4M,
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'EEE\')C5F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'EEE\')C5M,
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'FFF\')C6F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'FFF\')C6M,
  (SELECT COUNT (id_student) AS Ftotal FROM studentinfo WHERE Gender = \'F\' AND code_module = \'GGG\')C7F,
  (SELECT COUNT (id_student) AS Mtotal FROM studentinfo WHERE Gender = \'M\' AND code_module = \'GGG\')C7M');

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

