<?php
class Class_ClassTableNotice
{
    public $id;
    public $title;
    public $date;
    public $content;
<<<<<<< HEAD
    public $author;
    public $state;
    public $numberNotice;
    public $search;
    public $page;
    public $start;
    public $display;
    public function Create()
    {
        $sql = "insert into tbl_notice (no_title,no_author,no_date,no_content,no_state) values ('".$this->title."','".$this->author."','".$this->date."','".$this->content."','".$this->state."')";
=======
    public $state;
    public $numberNotice;
    public function Create()
    {
        $sql = "insert into tbl_notice (no_title,no_date,no_content,no_state) values ('".$this->title."','".$this->date."','".$this->content."','".$this->state."')";
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
        $query = mysql_query($sql);
    }
    public function Update()
    {
<<<<<<< HEAD
        $sql = "update tbl_notice set no_title = '".$this->title."',no_author = '".$this->author."', no_date = '".$this->date."', no_content = '".$this->content."', no_state = '".$this->state."' where no_id = ".$this->id;
        $query = mysql_query($sql);
    }
    public function UpdateState()
    {
        $sql = "update tbl_notice set no_state = '" . $this->state . "' where no_id = " . $this->id;
=======
        $sql = "update tbl_notice set no_title = '".$this->title."', no_date = '".$this->date."', no_content = '".$this->content."', no_state = '".$this->state."' where no_id = ".$this->id;
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
        $query = mysql_query($sql);
    }
    public function Delete()
    {
        $sql = "delete from tbl_notice where no_id = ".$this->id;
        $query = mysql_query($sql);
    }
<<<<<<< HEAD
    public function SelectId()
    {
        $sql = "select * from tbl_notice where no_id =" . $this->id;
        $query = mysql_query($sql);
        $notice = array();
        while ($row = mysql_fetch_object($query)) {
            $notice[] = $row;
        }
        if (count($notice) > 0) {
            return $notice;
        } else {
            return null;
        }

    }
=======
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
    public function SelectNumberNotice()
    {
        $sql = "select * from tbl_notice where no_state = 1 order by no_date DESC limit 0,".$this->numberNotice;
        $query = mysql_query($sql);
<<<<<<< HEAD
        $notice = array();
        while ($row = mysql_fetch_object($query)) {
            $notice[]= $row;
        }
        if(count($notice) > 0){
            return $notice;
        }else{
            return null;
        }

    }
    public function CountRows()
    {
        if ($this->search != "") {
            $sql = "select count(no_id) from tbl_notice where no_title LIKE '%" . $this->search . "%'";
        } else {
            $sql = "select count(no_id) from tbl_notice";
        }
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query, MYSQL_NUM);
        return $row[0];
    }
    public function SelectNotice()
    {
        if ($this->search != "") {
            $sql = "select * from tbl_notice where no_title LIKE '%" . $this->search . "%'";
        } else {
            $sql = "select * from tbl_notice limit $this->start,$this->display";
        }
        $query = mysql_query($sql);
        $select = array();
        while ($row = mysql_fetch_object($query)) {
            $select[] = $row;
        }
        if (count($select) > 0) {
            return $select;
        } else {
=======
        while ($row = mysql_fetch_object($query)) {
            $notice[]= $row;
        }
        if($notice != null){
            return $notice;
        } else{
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
            return null;
        }
    }
}