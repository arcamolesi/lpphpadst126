<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/MODEL/agricultor.php";

$id = $_GET['id']; 
 
$dalAgricultor = new DAL\Agricultor(); 
$dalAgricultor->Delete($id); 

header("location: lstagricultor.php");

?> 