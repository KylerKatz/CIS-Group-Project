<?php

include("connect.php");

$statement = oci_parse($connection, 'SELECT * FROM
(SELECT COUNT (id_student) AS AAAFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'AAA\' AND code_presentation = \'2013B\')C1F2013B,
(SELECT COUNT (id_student) AS AAAMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'AAA\' AND code_presentation = \'2013B\')C1M2013B,
(SELECT COUNT (id_student) AS BBBFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'BBB\' AND code_presentation = \'2013B\')C2F2013B,
(SELECT COUNT (id_student) AS BBBMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'BBB\' AND code_presentation = \'2013B\')C2M2013B,
(SELECT COUNT (id_student) AS CCCFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'CCC\' AND code_presentation = \'2013B\')C3F2013B,
(SELECT COUNT (id_student) AS CCCMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'CCC\' AND code_presentation = \'2013B\')C3M2013B,
(SELECT COUNT (id_student) AS DDDFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'DDD\' AND code_presentation = \'2013B\')C4F2013B,
(SELECT COUNT (id_student) AS DDDMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'DDD\' AND code_presentation = \'2013B\')C4M2013B,
(SELECT COUNT (id_student) AS EEEFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'EEE\' AND code_presentation = \'2013B\')C5F2013B,
(SELECT COUNT (id_student) AS EEEMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'EEE\' AND code_presentation = \'2013B\')C5M2013B,
(SELECT COUNT (id_student) AS FFFFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'FFF\' AND code_presentation = \'2013B\')C6F2013B,
(SELECT COUNT (id_student) AS FFFMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'FFF\' AND code_presentation = \'2013B\')C6M2013B,
(SELECT COUNT (id_student) AS GGGFtotal2013B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'GGG\' AND code_presentation = \'2013B\')C7F2013B,
(SELECT COUNT (id_student) AS GGGMtotal2013B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'GGG\' AND code_presentation = \'2013B\')C7M2013B,

(SELECT COUNT (id_student) AS AAAFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'AAA\' AND code_presentation = \'2013J\')C1F2013J,
(SELECT COUNT (id_student) AS AAAMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'AAA\' AND code_presentation = \'2013J\')C1M2013J,
(SELECT COUNT (id_student) AS BBBFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'BBB\' AND code_presentation = \'2013J\')C2F2013J,
(SELECT COUNT (id_student) AS BBBMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'BBB\' AND code_presentation = \'2013J\')C2M2013J,
(SELECT COUNT (id_student) AS CCCFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'CCC\' AND code_presentation = \'2013J\')C3F2013J,
(SELECT COUNT (id_student) AS CCCMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'CCC\' AND code_presentation = \'2013J\')C3M2013J,
(SELECT COUNT (id_student) AS DDDFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'DDD\' AND code_presentation = \'2013J\')C4F2013J,
(SELECT COUNT (id_student) AS DDDMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'DDD\' AND code_presentation = \'2013J\')C4M2013J,
(SELECT COUNT (id_student) AS EEEFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'EEE\' AND code_presentation = \'2013J\')C5F2013J,
(SELECT COUNT (id_student) AS EEEMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'EEE\' AND code_presentation = \'2013J\')C5M2013J,
(SELECT COUNT (id_student) AS FFFFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'FFF\' AND code_presentation = \'2013J\')C6F2013J,
(SELECT COUNT (id_student) AS FFFMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'FFF\' AND code_presentation = \'2013J\')C6M2013J,
(SELECT COUNT (id_student) AS GGGFtotal2013J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'GGG\' AND code_presentation = \'2013J\')C7F2013J,
(SELECT COUNT (id_student) AS GGGMtotal2013J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'GGG\' AND code_presentation = \'2013J\')C7M2013J,


(SELECT COUNT (id_student) AS AAAFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'AAA\' AND code_presentation = \'2014B\')C1F2014B,
(SELECT COUNT (id_student) AS AAAMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'AAA\' AND code_presentation = \'2014B\')C1M2014B,
(SELECT COUNT (id_student) AS BBBFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'BBB\' AND code_presentation = \'2014B\')C2F2014B,
(SELECT COUNT (id_student) AS BBBMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'BBB\' AND code_presentation = \'2014B\')C2M2014B,
(SELECT COUNT (id_student) AS CCCFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'CCC\' AND code_presentation = \'2014B\')C3F2014B,
(SELECT COUNT (id_student) AS CCCMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'CCC\' AND code_presentation = \'2014B\')C3M2014B,
(SELECT COUNT (id_student) AS DDDFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'DDD\' AND code_presentation = \'2014B\')C4F2014B,
(SELECT COUNT (id_student) AS DDDMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'DDD\' AND code_presentation = \'2014B\')C4M2014B,
(SELECT COUNT (id_student) AS EEEFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'EEE\' AND code_presentation = \'2014B\')C5F2014B,
(SELECT COUNT (id_student) AS EEEMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'EEE\' AND code_presentation = \'2014B\')C5M2014B,
(SELECT COUNT (id_student) AS FFFFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'FFF\' AND code_presentation = \'2014B\')C6F2014B,
(SELECT COUNT (id_student) AS FFFMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'FFF\' AND code_presentation = \'2014B\')C6M2014B,
(SELECT COUNT (id_student) AS GGGFtotal2014B FROM studentinfo WHERE Gender = \'F\' AND code_module = \'GGG\' AND code_presentation = \'2014B\')C7F2014B,
(SELECT COUNT (id_student) AS GGGMtotal2014B FROM studentinfo WHERE Gender = \'M\' AND code_module = \'GGG\' AND code_presentation = \'2014B\')C7M2014B,

(SELECT COUNT (id_student) AS AAAFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'AAA\' AND code_presentation = \'2014J\')C1F2014J,
(SELECT COUNT (id_student) AS AAAMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'AAA\' AND code_presentation = \'2014J\')C1M2014J,
(SELECT COUNT (id_student) AS BBBFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'BBB\' AND code_presentation = \'2014J\')C2F2014J,
(SELECT COUNT (id_student) AS BBBMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'BBB\' AND code_presentation = \'2014J\')C2M2014J,
(SELECT COUNT (id_student) AS CCCFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'CCC\' AND code_presentation = \'2014J\')C3F2014J,
(SELECT COUNT (id_student) AS CCCMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'CCC\' AND code_presentation = \'2014J\')C3M2014J,
(SELECT COUNT (id_student) AS DDDFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'DDD\' AND code_presentation = \'2014J\')C4F2014J,
(SELECT COUNT (id_student) AS DDDMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'DDD\' AND code_presentation = \'2014J\')C4M2014J,
(SELECT COUNT (id_student) AS EEEFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'EEE\' AND code_presentation = \'2014J\')C5F2014J,
(SELECT COUNT (id_student) AS EEEMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'EEE\' AND code_presentation = \'2014J\')C5M2014J,
(SELECT COUNT (id_student) AS FFFFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'FFF\' AND code_presentation = \'2014J\')C6F2014J,
(SELECT COUNT (id_student) AS FFFMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'FFF\' AND code_presentation = \'2014J\')C6M2014J,
(SELECT COUNT (id_student) AS GGGFtotal2014J FROM studentinfo WHERE Gender = \'F\' AND code_module = \'GGG\' AND code_presentation = \'2014J\')C7F2014J,
(SELECT COUNT (id_student) AS GGGMtotal2014J FROM studentinfo WHERE Gender = \'M\' AND code_module = \'GGG\' AND code_presentation = \'2014J\')C7M2014J


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
