<?php
class Class_ClassTableNews
{
    public $id;
    public $title;
    public $date;
    public $description;
    public $content;
    public $image;
    public $catalogId;
    public $author;
    public $state;
    public $focus;
    public $numberNews;
    public $search;
    public $page;
    public $start;
    public $display;

    public function Create()
    {
        $sql = "insert into tbl_news(ne_title,ne_date,ne_destion,ne_content,ne_image,catalogid,ne_author,ne_state,ne_focus) values ('" . $this->title . "','" . $this->date . "','" . $this->description . "','" . $this->content . "','" . $this->image . "','" . $this->catalogId . "','" . $this->author . "','" . $this->state . "','" . $this->focus . "')";
        $query = mysql_query($sql);
    }

    public function UpdateState()
    {
        $sql = "update tbl_news set ne_state = '" . $this->state . "' where ne_id = " . $this->id;
        $query = mysql_query($sql);
    }

    public function Update()
    {
        $sql = "update tbl_news set ne_title = '" . $this->title . "', ne_date = '" . $this->date . "', ne_destion = '" . $this->description . "', ne_content = '" . $this->content . "', catalogid = '" . $this->catalogId . "', ne_author = '" . $this->author . "', ne_state = '" . $this->state . "', ne_focus = '" . $this->focus . "' where ne_id = " . $this->id;
        $query = mysql_query($sql);
    }

    public function Delete()
    {
        $sql = "delete from tbl_news where ne_id = " . $this->id;
        $query = mysql_query($sql);
    }
<<<<<<< HEAD
=======

>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
    public function SelectId()
    {
        $sql = "select * from tbl_news where ne_id =" . $this->id;
        $query = mysql_query($sql);
<<<<<<< HEAD
        $news = array();
        while ($row = mysql_fetch_object($query)) {
            $news[] = $row;
        }
        if (count($news) > 0) {
=======
        while ($row = mysql_fetch_object($query)) {
            $news[] = $row;
        }
        if ($news != null) {
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
            return $news;
        } else {
            return null;
        }

    }
<<<<<<< HEAD
=======

>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
    public function CountRows()
    {
        if ($this->search != "") {
            $sql = "select count(ne_id) from tbl_news where ne_title LIKE '%" . $this->search . "%'";
        } else {
            $sql = "select count(ne_id) from tbl_news";
        }
<<<<<<< HEAD
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query, MYSQL_NUM);
        return $row[0];
    }
=======
            $query = mysql_query($sql);
            $row = mysql_fetch_array($query, MYSQL_NUM);
            return $row[0];
        }

>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf

    public function SelectNumberNews()
    {
        $sql = "select * from tbl_news where ne_state = 1 and ne_focus = 1 order by ne_date DESC limit 0," . $this->numberNews;
        $query = mysql_query($sql);
<<<<<<< HEAD
        $news = array();
=======
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
        while ($row = mysql_fetch_object($query)) {
            $news[] = $row;
        }
        if (count($news) > 0) {
            return $news;
        } else {
            return null;
        }
    }
<<<<<<< HEAD
=======

>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
    public function SelectTwoTable()
    {
        if ($this->search != "") {
            $sql = "select ne_id,ne_title,ne_date,tbl_news.catalogid,ne_state,ca_name from tbl_news inner join tbl_catalog on tbl_news.catalogid = tbl_catalog.catalogid where ne_title LIKE '%" . $this->search . "%'";
        } else {
            $sql = "select ne_id,ne_title,ne_date,tbl_news.catalogid,ne_state,ca_name from tbl_news inner join tbl_catalog on tbl_news.catalogid = tbl_catalog.catalogid limit $this->start,$this->display";
        }
        $query = mysql_query($sql);
        $select = array();
        while ($row = mysql_fetch_object($query)) {
            $select[] = $row;
        }
<<<<<<< HEAD
        if (count($select) > 0) {
=======
        if (count($select)>0){
>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
            return $select;
        } else {
            return null;
        }
<<<<<<< HEAD
=======

>>>>>>> 49a4e92abad439b3bc903e748bd30314f820fedf
    }
}