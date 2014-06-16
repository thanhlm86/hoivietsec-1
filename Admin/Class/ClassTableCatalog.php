<?php
class Class_ClassTableCatalog
{
    public $id;
    public $name;
    public $catalogID;
    public function Create()
    {
        $sql = "insert into tbl_catalog(ca_name,catalogid) values ('".$this->name."','".$this->catalogID."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
        $sql = "update tbl_catalog set ca_name = '".$this->name."', catalogid = '".$this->catalogID."', ad_name = '".$this->name."' where ca_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_catalog where ca_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function SelectNumberCatalog()
    {
        $sql = "select * from tbl_catalog";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $catalog[]= $row;
        }
        if($catalog != null){
            return $catalog;
        } else{
            return null;
        }
    }
}