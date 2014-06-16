<?php
class Class_ClassTableNotice
{
    public $id;
    public $title;
    public $date;
    public $content;
    public $state;
    public $numberNotice;
    public function Create()
    {
        $sql = "insert into tbl_notice (no_title,no_date,no_content,no_state) values ('".$this->title."','".$this->date."','".$this->content."','".$this->state."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
        $sql = "update tbl_notice set no_title = '".$this->title."', no_date = '".$this->date."', no_content = '".$this->content."', no_state = '".$this->state."' where no_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_notice where no_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function SelectNumberNotice()
    {
        $sql = "select * from tbl_notice where no_state = 1 order by no_date DESC limit 0,".$this->numberNotice;
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $notice[]= $row;
        }
        if($notice != null){
            return $notice;
        } else{
            return null;
        }
    }
}