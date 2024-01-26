<?php
function loadAll_taikhoan(){
    $sql = "SELECT * FROM taikhoan ORDER BY id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "DELETE FROM taikhoan where id=" .$id;
    $listtaikhoan = pdo_execute($sql);
}
    function insert_taikhoan($user, $email, $pass){
        $sql = "INSERT INTO `taikhoan` (`user`, `email`, `pass`) VALUES ('$user', '$email', '$pass')";
        pdo_execute($sql);
    }

    function checkuser($user, $pass){
        $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."' " ;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function checkEmail($email){
        $sql = "select * from taikhoan where email='".$email."' " ;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function edit_taikhoan($id, $user, $pass, $email, $address, $tel){
            $sql = "update taikhoan set  user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel = '".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    function loadone_taikhoan($id){
        $sql="select * from taikhoan where id=".$id;
        $listtaikhoan = pdo_query_one($sql);
        return $listtaikhoan;
    }
?>