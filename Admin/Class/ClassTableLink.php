<?php
class Class_ClassTableLink
{
    public $id;
    public $name;
    public $link;
    public $order;
    public $numberLink;
    public function Create()
    {
        $sql = "insert into tbl_link(li_name,li_link,li_order) values ('".$this->name."','".$this->link."','".$this->order."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
        $sql = "update tbl_link set li_name = '".$this->name."', li_link = '".$this->link."', li_order = '".$this->order."' where li_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_link where li_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function SelectNumberLink()
    {
        $sql = "select * from tbl_link where order by li_order DESC limit 0,".$this->numberLink;
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $link[]= $row;
        }
        if($link != null){
            return $link;
        } else{
            return null;
        }
    }
}