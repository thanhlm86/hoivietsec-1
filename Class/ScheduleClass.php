<?php
/**
 * Created by PhpStorm.
 * User: Thanh@401
 * Date: 6/6/14
 * Time: 6:29 PM
 */
include 'ConnectionClass.php';
class Class_ScheduleClass
{
    public $scheId;
    public $scheText;
    public $scheDate;
    public $scheAuthor;
    public $scheStatus;
    public function __construct()
    {
        $connect = new Class_ConnectionClass();
        $connect->connectDataBase();
    }
    public function getOneSchedule()
    {
        $sql = "select sche_date, sche_author, sche_text from schedule where sche_status = 1 order by sche_date desc limit 1";
        $query = mysql_query($sql);
        while($row = mysql_fetch_object($query)){
            $scheOne[] = $row;
        }
        return $scheOne;
    }
    public function getAllSchedule()
    {
//
    }

}