<?php
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc where id=" .$id;
        $listdm = pdo_execute($sql);
    }
    function loadAll_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id desc";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function loadone_danhmuc($id){
        $sql = "SELECT * FROM danhmuc where id =".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id, $tenloai){
        $sql = "update danhmuc set name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }

?>