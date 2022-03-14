<?php
if ($nilai_total > 55) {
    $status = "LULUS";
  } else {
    $status = "Tidak Lulus";
  }
  
  // if else
  if ($nilai_total >= 85 && $nilai_total <= 100) {
    $grade = "A";
  } elseif ($nilai_total >= 74 && $nilai_total <= 84) {
    $grade = "B";
  } elseif ($nilai_total >= 56 && $nilai_total <= 69) {
    $grade = "C";
  }elseif ($nilai_total >= 36 && $nilai_total <= 55) {
    $grade = "D";
  } elseif ($nilai_total >= 0 && $nilai_total <= 35) {
    $grade = "E";
  } else {
    $grade = "I";
  }
  
  // switch
  switch ($grade) {
    case "A";
    $predikat ="sangat memuaskan";
      break;
    case "B";
    $predikat ="memuaskan";
      break;
    case "C";
    $predikat ="cukup";
      break;
    case "D";
    $predikat ="kurang";
      break;
    case "E";
    $predikat ="sangat kurang";
      break;
    default:
    $predikat ="tidak ada";
      break;
  }
  
 
  ?>
  