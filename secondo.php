<?php


if (isset($_GET['field1'])) {
 

 
 
 $field1 = $_GET['field1'];
 
  

 
  $field1 = filter_var($field1,
    FILTER_SANITIZE_STRING);


 
 
 $field2 = $_GET['field2'];
 $field3 = $_GET['field3'];
 $field4 = $_GET['field4'];
 $field5 = $_GET['field5'];
 $field6 = $_GET['field6'];
 $field7 = $_GET['field7'];
 
 
 

$field2 = filter_var($field2,
    FILTER_SANITIZE_STRING);
	
$field3 = filter_var($field3,
    FILTER_SANITIZE_STRING);
 	
	
	$field4 = filter_var($field4,
    FILTER_SANITIZE_STRING);
 
 $field5 = filter_var($field5,
    FILTER_SANITIZE_STRING);
 
 $field6 = filter_var($field6,
    FILTER_SANITIZE_STRING);
 
 $field7 = filter_var($field7,
    FILTER_SANITIZE_EMAIL);
 
 
 
 
 
 $fieldCA1 = "FAKE-".$_GET['fieldCA1'];
 $fieldCA2 = "FAKE-".$_GET['fieldCA2'];
 $fieldCA3 = $_GET['fieldCA3'];
 
 $fieldCA1 = filter_var($fieldCA1,
    FILTER_SANITIZE_STRING);
 
 $fieldCA2 = filter_var($fieldCA2,
    FILTER_SANITIZE_STRING);
 
 $fieldCA3 = filter_var($fieldCA3,
    FILTER_SANITIZE_STRING);
 
 
 
 
 
 
 
 
 include  "secondo1.php";
 
 
 
 
}





?>