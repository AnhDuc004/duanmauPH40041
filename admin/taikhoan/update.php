<?php 
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatetk" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container"></div>
           <div class="row2 mb10">
            <label>Tên tài khoản</label> <br>
            <input type="text" name="user" value="<?=$taikhoan['user'];?>">
           </div>
           <div class="row2 mb10">
            <label>MẬT KHẨU</label> <br>
            <input type="text" name="pass" value="<?=$taikhoan['pass'];?>">
           </div>
           <div class="row2 mb10">
            <label>EMAIL</label> <br>
            <input type="text" name="email" value="<?=$taikhoan['email'];?>">
           </div>
           <div class="row2 mb10">
            <label>ĐỊA CHỈ</label> <br>
            <input type="text" name="address" value="<?=$taikhoan['address'];?>">
           </div>
           <div class="row2 mb10">
            <label>ĐIỆN THOẠI</label> <br>
            <input type="text" name="tel" value="<?=$taikhoan['tel'];?>">
           </div>
           <div class="row2 mb10">
            <label>VAI TRÒ</label> <br>
            <input type="text" name="role" value="<?=$taikhoan['role'];?>">
           </div>



           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$taikhoan['id']?>">
         <input class="mr20" type="submit" name="capnhat" value="Cập nhật">
         <input  class="mr20" type="reset" value="Nhập lại">

         <a href="index.php?act=dskh"><input  class="mr20" type="button" value="Danh sách"></a>
           </div>
           <?php 
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>
    </div>