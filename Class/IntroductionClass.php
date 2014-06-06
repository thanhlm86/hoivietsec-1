<?php
/**
 * Created by PhpStorm.
 * User: Thanh@401
 * Date: 6/6/14
 * Time: 5:23 PM
 */
include 'ConnectionClass.php';
class Class_IntroductionClass
{
    public $introId;
    public $introText;
    public $introDate;
    public $introAuthor;
    public $introStatus;

    public function __construct()
    {
        $connect = new Class_ConnectionClass();
        $connect->connectDataBase();
    }

    public function getOneIntroduction()
    {
        $sql = "select intro_date, intro_author, intro_text from introduction where intro_status = 1 order by intro_date desc limit 1";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $introOne[] = $row;
        }
        return $introOne;
    }

    public function getAllIntroduction()
    {
        $sql = "select intro_date, intro_author from introduction where intro_status = 1 order by intro_date";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $introAllList[] = $row;
        }
        return $introAllList;
    }
    public function delIntroduction()
    {
        $sql = "delete from introduction where intro_id=".$this->introId;
        $query = mysql_query($sql);
        return $query;
    }
    public function editIntroduction()
    {
        $sql = "update introduction set intro_text='".$this->introText."', intro_date = '".$this->introDate."', intro_author = '".$this->introAuthor."', intro_status = '".$this->introStatus."'";
        $query = mysql_query($sql);
    }
    public  function addIntroduction()
    {
        $sql = "insert into introduction (intro_text, intro_date, intro_author, intro_status) value ('".$this->intro_text."', '".$this->introDate."', '".$this->introAuthor."', '".$this->introStatus."')";
        $query = mysql_query($sql);
    }
}