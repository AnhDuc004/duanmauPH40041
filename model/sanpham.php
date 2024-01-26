<?php
    function insert_sanpham($tensp, $giasp, $img, $desc, $iddm){
        $sql = "INSERT INTO `sanpham` (`name`, `price`, `img`, `desc`, `iddm`) VALUES ('$tensp', '$giasp', '$img', '$desc', '$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham where id=" .$id;
        pdo_execute($sql);
    }
    function loadAll_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_banchay(){
        $sql = "select * from sanpham where 1 order by view desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham($kyw="", $iddm=0){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm like '".$iddm."'";
        }
        $sql.= " order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
        $sql = "select * from danhmuc where id=".$iddm ;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id ;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    
    function load_sanpham_cungloai($id, $iddm){
        $sql = "select * from sanpham where iddm=".$iddm." AND id <> ".$id ;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$iddm,$tensp,$giasp,$desc,$img){
        if($img!=""){
            $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', img='".$img."', desc='".$desc."', where id=".$id;
        }else{
            $sql="update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."',	desc='".$desc."' where id=".$id;
        }
        
        pdo_execute($sql);
    }

?>