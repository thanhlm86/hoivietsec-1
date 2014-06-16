<?php
include_once("Class/ClassConnectDatabase.php");
include_once("Class/ClassTableAdvert.php");

$use1 = new Class_ConnectDatabase();
$use2 = new Class_ClassTableAdvert();
$file = $_FILES['image'];
$tenFile = $file['name'];
if ($tenFile != "") {
    move_uploaded_file($file['tmp_name'], "Image/" . $tenFile);
}
$use2->name = $_REQUEST['name'];
$use2->date = $_REQUEST['datepicker'];
$date = explode("/",$use2->date);
$use2->date = $date[2].'-'.$date[0].'-'.$date[1];
$use2->link = $_REQUEST['name'];
$use2->image = $tenFile;
$use2->state = $_REQUEST['name'];
$use2->Create();
