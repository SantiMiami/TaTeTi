<?php
include 'Tabla.php';
$nothing = true;
$i = 0;
if ($_POST['op1'] == 1){
    $mar['A1'] = $_POST['op1'];
} else $_POST['op1'] = '0';
if ($_POST['op2'] == 1){
    $mar['A2'] = $_POST['op2'];
} else $mar['A2'] = '';
if ($_POST['op3'] == 1){
    $mar['A3'] = $_POST['op3'];
} else $mar['A3'] = '';
if ($_POST['op4'] == 1){
    $mar['A4'] = $_POST['op4'];
} else $mar['A4'] = '';
if ($_POST['op5'] == 1){
    $mar['A5'] = $_POST['op5'];
} else $mar['A5'] = '';
if ($_POST['op6'] == 1){
    $mar['A6'] = $_POST['op6'];
} else $mar['A6'] = '';
if ($_POST['op7'] == 1){
    $mar['A7'] = $_POST['op7'];
} else $mar['A7'] = '';
if ($_POST['op8'] == 1){
    $mar['A8'] = $_POST['op8'];
} else $mar['A8'] = '';
if ($_POST['op9'] == 1){
    $mar['A9'] = $_POST['op9'];
} else $mar['A9'] = '';



 

while  ($nothing and $i <= 13) {
    if ($mar['A1'] == 1 && $mar['A2'] == 1 && $mar['A3'] == 1 ){
            echo "CHUPENMELA";
            $nothing = false;
    }
     if ($mar['A4'] == 1 && $mar['A5'] == 1 && $mar['A6'] == 1 ){
            echo "CHUPENMELA";
            $nothing = false;
     }
    if ($_POST['op7'] == 1 && $_POST['op8'] == 1 && $_POST['op9'] == 1 ){
            echo "CHUPENMELA";
            $nothing = false;
    }
    if ($_POST['op1'] == 1 && $_POST['op4'] == 1 && $_POST['op7'] == 1 ){
            echo "CHUPENMELA";
            $nothing = false;
    }
    if ($_POST['op2'] == 1 && $_POST['op8'] == 1 && $_POST['op5'] == 1 ){
            echo "CHUPENMELA";
            $nothing = false;
    }
    if ($_POST['op9'] == 1 && $_POST['op6'] == 1 && $_POST['op3'] == 1 ){
             echo "CHUPENMELA";
            $nothing = false;
    }
    if ($_POST['op1'] == 1 && $_POST['op5'] == 1 && $_POST['op9'] == 1){
        echo "CHUPENMELA";
        $nothing = false;
    }
    if ($_POST['op7'] == 1 && $_POST['op5'] == 1 && $_POST['op3'] == 1 ){
        echo "CHUPENMELA";
        $nothing = false;
                };
    $i ++;
            }
    
print_r($mar);