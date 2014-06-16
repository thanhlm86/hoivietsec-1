<?php
include_once("Class/ClassConnectDatabase.php");
include_once("Class/ClassTableNews.php");

$use1 = new Class_ConnectDatabase();
$use2 = new Class_ClassTableNews();
$file = $_FILES['image'];
$tenFile = $file['name'];
if ($tenFile != "") {
    move_uploaded_file($file['tmp_name'], "Image/" . $tenFile);
}
$use2->id = $_REQUEST['id'];
$use2->title = $_REQUEST['title'];
$use2->author = $_REQUEST['author'];
$use2->date = $_REQUEST['datepicker'];
$use2->description = $_REQUEST['description'];
$use2->content = $_REQUEST['content'];
$use2->catalogId = $_REQUEST['catalogID'];
$use2->state = $_REQUEST['state'];
$use2->focus = $_REQUEST['focus'];
$use2->image = $tenFile;
$use2->Update();
header("Location: Index.php");