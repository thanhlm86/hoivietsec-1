<?php
class Class_ClassTableAdvert
{
    public $id;
    public $name;
    public $link;
    public $date;
    public $image;
    public $state;
    public $numberAdvert;
    public function Create()
    {
        $sql = "insert into tbl_advert(ad_link,ad_date,ad_name,ad_image,ad_state) values ('".$this->link."','".$this->date."','".$this->name."','".$this->image."','".$this->state."')";
        $query = mysql_query($sql);
    }
    public function Update()
    {
        $sql = "update tbl_advert set ad_link = '".$this->link."', ad_date = '".$this->date."', ad_name = '".$this->name."', ad_image = '".$this->image."',ad_state = '".$this->state."' where ad_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_advert where ad_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function SelectNumberAdvert()
    {
        $sql = "select * from tbl_advert where ad_state = 1 order by ad_date DESC limit 0,".$this->numberAdvert;
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $advert[]= $row;
        }
        if($advert != null){
            return $advert;
        } else{
            return null;
        }
    }
}