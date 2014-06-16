<?php
class Class_ClassTableView
{
    public $id;
    public $views;
    public function Create()
    {
        $sql = "insert into tbl_view(vi_views) values ('".$this->views."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
        $sql = "update tbl_view set vi_views = '".$this->views."' where vi_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_view where no_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function SelectView()
    {
        $sql = "select * from tbl_view";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
          $row;
        }
        if($row != null){
            return $row;
        } else{
            return null;
        }
    }
}