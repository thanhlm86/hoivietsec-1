<?php
include_once("Class/ClassConnectDatabase.php");
include_once("Class/ClassTableNotice.php");
$use1 = new Class_ConnectDatabase();
$use2 = new Class_ClassTableNotice();
$use2->title = $_REQUEST['title'];
$use2->date = $_REQUEST['datepicker'];
$use2->content = $_REQUEST['content'];
$use2->state = $_REQUEST['state'];
$use2->Create();
