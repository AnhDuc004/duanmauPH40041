<?php 
    function loadone_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user,  binhluan.ngaybinhluan FROM `binhluan` 
             JOIN taikhoan ON binhluan.iduser = taikhoan.id
             JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }

    function loadall_binhluan($idpro){
        $sql="select * from binhluan where 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id desc";

        $listbl = pdo_query($sql);
        return $listbl;
    }

    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }

    function insert_binhluan($noidung,$iduser,$idpro, $ngaybinhluan){
        $sql = "
            INSERT INTO binhluan(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
            VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan'); ";

        pdo_execute($sql);
    }

?>