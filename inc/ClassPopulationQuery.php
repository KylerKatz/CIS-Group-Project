<?php

include("connect.php");

  $statement = oci_parse($connection, 'SELECT C1F.Ftotal / C1M.Mtotal AS "Female to Male class AAA population",
  C2F.Ftotal / C2M.Mtotal AS "Female to Male class BBB population", 
  C3F.Ftotal / C3M.Mtotal AS "Female to Male class CCC population", 
  C4F.Ftotal / C4M.Mtotal AS "Female to Male class DDD population", 
  C5F.Ftotal / C5M.Mtotal AS "Female to Male class EEE population", 
  C6F.Ftotal / C6M.Mtotal AS "Female to Male class FFF population", 
  C7F.Ftotal / C7M.Mtotal AS "Female to Male class GGG population" FROM
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

