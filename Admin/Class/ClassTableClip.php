<?php
class Class_ClassTableClip
{
    public $id;
    public $name;
    public $url;
    public $click;
    public $state;
    public $numberClip;
    public function Create()
    {
        $sql = "insert into tbl_clip(cl_name,cl_url,cl_click,ad_state) values ('".$this->name."','".$this->url."','".$this->click."','".$this->state."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
        $sql = "update tbl_clip set cl_name = '".$this->name."', cl_url = '".$this->url."', cl_click = '".$this->click."',cl_state = '".$this->state."' where cl_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_clip where cl_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function SelectNumberClip()
    {
        $sql = "select * from tbl_clip where cl_state = 1 limit 0,".$this->numberClip;
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $clip[]= $row;
        }
        if($clip != null){
            return $clip;
        } else{
            return null;
        }
    }
}