<?php include_once("Class/ClassConnectDatabase.php");
include_once("Class/FaqsClass.php");
$use1 = new Class_ConnectDatabase();
$val =  $_REQUEST['data'];
$question = new Class_FaqsClass();
$question->FaqId = $_REQUEST['id'];
$question->FaqName = $val['Question']['fullname'];
$question->FaqPhone = $val['Question']['phone'];
$question->FaqEmail = $val['Question']['email'];
$question->FaqContent = $val['Question']['content'];
$question->FaqAnswer = $val['Question']['content1'];
$question->FaqAnswerPeople = $val['Question']['answer'];
$question->FaqDate = $val['Question']['date'];
$question->FaqStatus = $val['Question']['status'];
$question->editFaq();
header("location: FaqsList.php");