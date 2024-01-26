<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "header.php";
    //controler
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                // kiem tra xem ng dung co click add hay ko
                if(isset($_POST['themoi'])&&($_POST['themoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Them thanh cong";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                   update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;  


                // controller san pham 
                case 'addsp':
                    // kiem tra xem ng dung co click add hay ko
                    if(isset($_POST['themoi'])&&($_POST['themoi'])){
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $desc = $_POST['desc'];
                        $img = $_FILES['img']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                            
                        }else{

                        }

                        insert_sanpham($tensp, $giasp, $img, $desc, $iddm);
                        $thongbao = "Them thanh cong";
                    }
                    $listdm = loadAll_danhmuc();
                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw = $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    }else{
                        $kyw = '';
                        $iddm = 0; 
                    }

                    $listdm = loadAll_danhmuc();
                    $listsp = loadAll_sanpham($kyw, $iddm);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsp = loadAll_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sp = loadone_sanpham($_GET['id']);
                    }
                    $listdm = loadAll_danhmuc();
                    include "sanpham/update.php";
                    break;
                    case 'updatesp':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $giasp=$_POST['giasp'];
                            $desc=$_POST['desc'];
                            $img=$_FILES['img']['name'];
                            $target_dir = "../uploads/";
                            $target_file = $target_dir . basename($_FILES["img"]["name"]);
                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                
                            } else {
                      
                            }
                                update_sanpham($id,$iddm,$tensp,$giasp,$desc,$img);
                                $thongbao="Cập nhật thành công";
                        }
                        $listdanhmuc=loadAll_danhmuc();
                        $listsanpham=loadAll_sanpham();
                        include "sanpham/list.php";
                        break;
                    case 'dskh':                     
                        $listtaikhoan = loadAll_taikhoan();
                        include "taikhoan/list.php";
                        break; 
                    case 'xoatk':                     
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_taikhoan($_GET['id']);
                        }
                        $listtaikhoan = loadAll_taikhoan();
                        include "taikhoan/list.php";
                        break;
                    case 'suatk':
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                $taikhoan=loadone_taikhoan($_GET['id']);
                            }
                            $listtaikhoan=loadall_taikhoan();
                            include "taikhoan/update.php";
                            break;
                    case 'updatetk':
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                //$id, $user, $pass, $email, $address, $tel
                                $id=$_POST['id'];
                                $user=$_POST['user'];
                                $pass=$_POST['pass'];
                                $email=$_POST['email'];
                                $address=$_POST['address'];
                                $tel=$_POST['tel'];
                                $role=$_POST['role'];
                                edit_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                                $thongbao="Cập nhật thành công";
                            }
                            $listtaikhoan=loadall_taikhoan(); 
                            include "taikhoan/list.php";
                            break;
                    case 'dsbl':
                            $listbinhluan=loadall_binhluan(0);
                            include "binhluan/listbinhluan.php";
                            break;
            
                    case 'xoabl':
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                delete_binhluan($_GET['id']);
                            }
                            $listbinhluan=loadall_binhluan(0);
                            include "binhluan/listbinhluan.php";
                            break;
                    case 'thongke':
                            $listthongke=loadall_thongke();
                            include "thongke/list.php";
                            break;  
                    case 'bieudo':
                            $listthongke=loadall_thongke();
                            include "thongke/bieudo.php";
                            break;  
            default :
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }

    include "footer.php";
?>