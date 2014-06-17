<?php
class Class_ClassTableCatalog
{
    public $id;
    public $name;
    public $catalogID;
<<<<<<< HEAD
    public $search;
    public $page;
    public $start;
    public $display;
=======
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
    public function Create()
    {
        $sql = "insert into tbl_catalog(ca_name,catalogid) values ('".$this->name."','".$this->catalogID."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
<<<<<<< HEAD
        $sql = "update tbl_catalog set ca_name = '".$this->name."', catalogid = '".$this->catalogID."' where ca_id = ".$this->id;
=======
        $sql = "update tbl_catalog set ca_name = '".$this->name."', catalogid = '".$this->catalogID."', ad_name = '".$this->name."' where ca_id = ".$this->id;
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
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
<<<<<<< HEAD
        $catalog = array();
        while ($row = mysql_fetch_object($query)) {
            $catalog[]= $row;
        }
        if(count($catalog) > 0){
=======
        while ($row = mysql_fetch_object($query)) {
            $catalog[]= $row;
        }
        if($catalog != null){
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
            return $catalog;
        } else{
            return null;
        }
    }
<<<<<<< HEAD
    public function SelectId()
    {
        $sql = "select * from tbl_catalog where ca_id =" . $this->id;
        $query = mysql_query($sql);
        $catalog = array();
        while ($row = mysql_fetch_object($query)) {
            $catalog[] = $row;
        }
        if (count($catalog) > 0) {
            return $catalog;
        } else {
            return null;
        }
    }
    public function CountRows()
    {
        if ($this->search != "") {
            $sql = "select count(ca_id) from tbl_catalog where ca_name LIKE '%" . $this->search . "%'";
        } else {
            $sql = "select count(ca_id) from tbl_catalog";
        }
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query, MYSQL_NUM);
        return $row[0];
    }
    public function SelectCatalog()
    {
        if ($this->search != "") {
            $sql = "select * from tbl_catalog where ca_name LIKE '%" . $this->search . "%'";
        } else {
            $sql = "select * from tbl_catalog limit $this->start,$this->display";
        }
        $query = mysql_query($sql);
        $select = array();
        while ($row = mysql_fetch_object($query)) {
            $select[] = $row;
        }
        if (count($select) > 0) {
            return $select;
        } else {
            return null;
        }
    }
=======
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
}