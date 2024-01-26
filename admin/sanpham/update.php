<?php 
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath = "../uploads/". $img;
        if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height='80' >";
        }else{
            $hinh = "no photo";
        }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <select name="iddm" id="">
                <option value="<?=$iddm?>" selected>--All--</option>
                <?php 
                    foreach($listdm as $dm){
                        extract($dm);
                        if($iddm==$id) $s= "selected"; else $s="";
                        echo '<option value="'.$id.'" '.$s.' > '.$name.' </option>' ;
                    }
                ?>
                
               </select>   

           </div>
           <div class="row2 mb10">
               <label>Tên Sản Phẩm</label> <br>
               <input type="text" name="tensp" value="<?=$sp['name']?>">
           </div>
           <div class="row2 mb10">
               <label>Giá</label> <br>
               <input type="text" name="giasp" value="<?=$price?>">
           </div>
           <div class="row2 mb10">
               <label>Ảnh</label> <br>
               <input type="file" name="img" >
               <?=$hinh?>
           </div>
           <div class="row2 mb10">
               <label>Mô tả</label> <br>
               <textarea name="desc" id="" cols="30" rows="10" value="<?=$desc?>"></textarea>
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
            <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>

           <?php 
           if(isset($thongbao)&&($thongbao!=""))
              echo $thongbao;
           ?>
          </form>
         </div>
        </div>
 
     <!-- END HEADER -->

       
    </div> 