<?php

include("connect.php");


if (empty($_POST['sem'])) {
  $errorMSG = "<li>Name is required</<li>";
} else {
  $sem = $_POST['sem'];
  $statement = oci_parse($connection, "SELECT * FROM
  (SELECT COUNT (id_student) AS AAAFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'AAA' AND code_presentation = '$sem')C1F,
  (SELECT COUNT (id_student) AS AAAMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'AAA' AND code_presentation = '$sem')C1M,
  (SELECT COUNT (id_student) AS BBBFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'BBB' AND code_presentation = '$sem')C2F,
  (SELECT COUNT (id_student) AS BBBMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'BBB' AND code_presentation = '$sem')C2M,
  (SELECT COUNT (id_student) AS CCCFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'CCC' AND code_presentation = '$sem')C3F,
  (SELECT COUNT (id_student) AS CCCMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'CCC' AND code_presentation = '$sem')C3M,
  (SELECT COUNT (id_student) AS DDDFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'DDD' AND code_presentation = '$sem')C4F,
  (SELECT COUNT (id_student) AS DDDMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'DDD' AND code_presentation = '$sem')C4M,
  (SELECT COUNT (id_student) AS EEEFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'EEE' AND code_presentation = '$sem')C5F,
  (SELECT COUNT (id_student) AS EEEMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'EEE' AND code_presentation = '$sem')C5M,
  (SELECT COUNT (id_student) AS FFFFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'FFF' AND code_presentation = '$sem')C6F,
  (SELECT COUNT (id_student) AS FFFMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'FFF' AND code_presentation = '$sem')C6M,
  (SELECT COUNT (id_student) AS GGGFtotal FROM kkatz.studentinfo WHERE Gender = 'F' AND code_module = 'GGG' AND code_presentation = '$sem')C7F,
  (SELECT COUNT (id_student) AS GGGMtotal FROM kkatz.studentinfo WHERE Gender = 'M' AND code_module = 'GGG' AND code_presentation = '$sem')C7M");
}
oci_execute($statement);

while (($row = oci_fetch_object($statement))) {
  $data[] = $row;
}

if (empty($errorMSG)) {
  echo json_encode(['code' => 200, 'msg' => $data]);
  exit;
}

//
// VERY important to close Oracle Database Connections and free statements!
//
echo "Form Submitted Succesfully";

oci_free_statement($statement);
oci_close($connection);
  //echo json_encode(['msg' => $id]);
