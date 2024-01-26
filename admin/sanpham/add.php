<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
               <label for="">Danh muc</label>
               <select name="iddm" id="">
                <?php 
                    foreach($listdm as $dm){
                        extract($dm);
                        echo '<option value="'.$id.'"> '.$name.' </option>';
                    }
                ?>
                
               </select>
           </div>
           <div class="row2 mb10">
               <label>Tên Sản Phẩm</label> <br>
               <input type="text" name="tensp" placeholder="Nhập vào">
           </div>
           <div class="row2 mb10">
               <label>Giá</label> <br>
               <input type="text" name="giasp" placeholder="Nhập vào">
           </div>
           <div class="row2 mb10">
               <label>Ảnh</label> <br>
               <input type="file" name="img" >
           </div>
           <div class="row2 mb10">
               <label>Mô tả</label> <br>
               <textarea name="desc" id="" cols="30" rows="10"></textarea>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themoi" value="THÊM MỚI">
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