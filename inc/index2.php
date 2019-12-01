<?php

include("connect.php");


if (empty($_POST['sem'])) {
    $errorMSG = "<li>Name is required</<li>";
} else {
	$sem = $_POST['sem'];
	$statement = oci_parse($connection, "SELECT 
  ROUND (p1.s /T1.Total, 4) AS P1, 
  ROUND (w1.s /T1.Total, 4) AS W1, 
  ROUND (d1.s /T1.Total, 4) AS D1,
  ROUND (f1.s /T1.Total, 4) AS F1,
  
  ROUND (p2.s /T2.Total, 4) AS P2, 
  ROUND (w2.s /T2.Total, 4) AS W2, 
  ROUND (d2.s /T2.Total, 4) AS D2,
  ROUND (f2.s /T2.Total, 4) AS F2,
  
  ROUND (p3.s /T3.Total, 4) AS P3, 
  ROUND (w3.s /T3.Total, 4) AS W3, 
  ROUND (d3.s /T3.Total, 4) AS D3,
  ROUND (f3.s /T3.Total, 4) AS F3,
  
  ROUND (p4.s /T4.Total, 4) AS P4, 
  ROUND (w4.s /T4.Total, 4) AS W4, 
  ROUND (d4.s /T4.Total, 4) AS D4,
  ROUND (f4.s /T4.Total, 4) AS F4,
  
  ROUND (p5.s /T5.Total, 4) AS P5, 
  ROUND (w5.s /T5.Total, 4) AS W5, 
  ROUND (d5.s /T5.Total, 4) AS D5,
  ROUND (f5.s /T5.Total, 4) AS F5,
  
  ROUND (p6.s /T6.Total, 4) AS P6, 
  ROUND (w6.s /T6.Total, 4) AS W6, 
  ROUND (d6.s /T6.Total, 4) AS D6,
  ROUND (f6.s /T6.Total, 4) AS F6,
  
  ROUND (p7.s /T7.Total, 4) AS P7, 
  ROUND (w7.s /T7.Total, 4) AS W7, 
  ROUND (d7.s /T7.Total, 4) AS D7,
  ROUND (f7.s /T7.Total, 4) AS F7,
  
  ROUND (p8.s /T8.Total, 4) AS P8, 
  ROUND (w8.s /T8.Total, 4) AS W8, 
  ROUND (d8.s /T8.Total, 4) AS D8,
  ROUND (f8.s /T8.Total, 4) AS F8,
  
  ROUND (p9.s /T9.Total, 4) AS P9, 
  ROUND (w9.s /T9.Total, 4) AS W9, 
  ROUND (d9.s /T9.Total, 4) AS D9,
  ROUND (f9.s /T9.Total, 4) AS F9,
  
  ROUND (p10.s /T9.Total, 4) AS P10, 
  ROUND (w10.s /T9.Total, 4) AS W10, 
  ROUND (d10.s /T9.Total, 4) AS D10,
  ROUND (f10.s /T9.Total, 4) AS F10
  
  FROM
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '0-10%')T1,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '0-10%' AND final_result = 'Pass' AND code_presentation = '$sem' )p1,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '0-10%' AND final_result = 'Withdrawn'AND code_presentation = '$sem')w1,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '0-10%' AND final_result = 'Distinction' AND code_presentation = '$sem')d1,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '0-10%' AND final_result = 'Fail' AND code_presentation = '$sem' )f1,
   
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '10-20')T2,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '10-20' AND final_result = 'Pass' AND code_presentation = '$sem' )p2,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '10-20' AND final_result = 'Withdrawn' AND code_presentation = '$sem' )w2,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '10-20' AND final_result = 'Distinction' AND code_presentation = '$sem')d2,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '10-20' AND final_result = 'Fail' AND code_presentation = '$sem' )f2,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '20-30%')T3,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '20-30%' AND final_result = 'Pass' AND code_presentation = '$sem')p3,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '20-30%' AND final_result = 'Withdrawn' AND code_presentation = '$sem')w3,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '20-30%' AND final_result = 'Distinction' AND code_presentation = '$sem')d3,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '20-30%' AND final_result = 'Fail' AND code_presentation = '$sem')f3,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '30-40%')T4,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '30-40%' AND final_result = 'Pass' AND code_presentation = '$sem')p4,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '30-40%' AND final_result = 'Withdrawn' AND code_presentation = '$sem' )w4,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '30-40%' AND final_result = 'Distinction' AND code_presentation = '$sem' )d4,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '30-40%' AND final_result = 'Fail' AND code_presentation = '$sem')f4,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '40-50%')T5,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '40-50%' AND final_result = 'Pass' AND code_presentation = '$sem')p5,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '40-50%' AND final_result = 'Withdrawn' AND code_presentation = '$sem' )w5,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '40-50%' AND final_result = 'Distinction' AND code_presentation = '$sem')d5,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '40-50%' AND final_result = 'Fail' AND code_presentation = '$sem')f5,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '50-60%')T6,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '50-60%' AND final_result = 'Pass' AND code_presentation = '$sem')p6,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '50-60%' AND final_result = 'Withdrawn' AND code_presentation = '$sem' )w6,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '50-60%' AND final_result = 'Distinction' AND code_presentation = '$sem' )d6,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '50-60%' AND final_result = 'Fail' AND code_presentation = '$sem')f6,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '60-70%')T7,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '60-70%' AND final_result = 'Pass' AND code_presentation = '$sem')p7,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '60-70%' AND final_result = 'Withdrawn' AND code_presentation = '$sem')w7,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '60-70%' AND final_result = 'Distinction' AND code_presentation = '$sem')d7,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '60-70%' AND final_result = 'Fail' AND code_presentation = '$sem')f7,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '70-80%')T8,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '70-80%' AND final_result = 'Pass' AND code_presentation = '$sem')p8,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '70-80%' AND final_result = 'Withdrawn' AND code_presentation = '$sem' )w8,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '70-80%' AND final_result = 'Distinction' AND code_presentation = '$sem')d8,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '70-80%' AND final_result = 'Fail' AND code_presentation = '$sem')f8,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '80-90%')T9,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '80-90%' AND final_result = 'Pass' AND code_presentation = '$sem')p9,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '80-90%' AND final_result = 'Withdrawn' AND code_presentation = '$sem')w9,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '80-90%' AND final_result = 'Distinction' AND code_presentation = '$sem')d9,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '80-90%' AND final_result = 'Fail' AND code_presentation = '$sem' )f9,
  
  (SELECT COUNT(id_Student) AS Total FROM kkatz.studentinfo  WHERE imd_band = '90-100%')T10,
  (SELECT COUNT(id_Student) AS s FROM kkatz.studentinfo WHERE imd_band = '90-100%' AND final_result = 'Pass' AND code_presentation = '$sem')p10,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '90-100%' AND final_result = 'Withdrawn' AND code_presentation = '$sem')w10,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '90-100%' AND final_result = 'Distinction' AND code_presentation = '$sem')d10,
  (SELECT COUNT(id_student) AS s FROM kkatz.studentinfo  WHERE imd_band = '90-100%' AND final_result = 'Fail' AND code_presentation = '$sem')f10");


}
  oci_execute($statement);
  
  while (($row = oci_fetch_object($statement))) {
      $data[]= $row;
  }
  
  if(empty($errorMSG)){
  echo json_encode(['code'=>200, 'msg'=>$data]);
	exit;
}
  
  //
  // VERY important to close Oracle Database Connections and free statements!
  //
  echo "Form Submitted Succesfully";

  oci_free_statement($statement);
  oci_close($connection);
  //echo json_encode(['msg' => $id]);

?>