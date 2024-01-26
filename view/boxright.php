<div class="mb">
                <div class="box_title">TÀI KHOẢN</div>
                <div class="box_content form_account">
                  <?php
                    if(isset($_SESSION['user'])){
                      extract($_SESSION['user']);
                  ?>
                        <div class="row mb10">
                          <h4>
                            Xin Chào <br>
                            <?=$user?>
                          </h4>
                        </div>

                        <li class="form_li"><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li><br>
                        <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập Nhật Thông Tin Tài Khoản</a></li><br>
                        <?php if($role==1){ ?>
                        <li class="form_li"><a href="admin/index.php">Đăng nhập Admin</a></li><br>
                        <?php }?>
                        <li class="form_li"><a href="index.php?act=thoat">Đăng Xuất</a></li><br>

                  <?php
                    }else{
                      

                  ?>
                    <form action="index.php?act=dangnhap" method="POST">
                    <h4>Tên đăng nhập</h4><br>
                    <input type="text" name="user">
                    <h4>Mật khẩu</h4><br>
                    <input type="password" name="pass"><br>
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                   <br><input type="submit" value="Đăng nhập" name="dangnhap">
                   <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                   <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                   </form>
                    <?php } ?>
                </div>
             </div>
             <div class="mb">
                <div class="box_title">DANH MỤC</div>
                <div class="box_content2 product_portfolio">
                  <ul >
                    <?php
                        foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=".$id;
                            echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                        }
                    ?>

                  </ul>
                </div>
                <div class="box_search">
                  <form action="index.php?act=sanpham" method="POST">
                     <input type="text" name="kyw"placeholder="Từ khóa tìm kiếm">
                     <input type="submit" name="timkiem" value="Search" id="timkiem">
                  </form>
                </div>
             </div>
             <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
             <div class="mb">
                <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
                <div class="box_content">
                  <?php
                  foreach($dsbc as $sp){
                     extract($sp);
                     $hinh = $img_path.$img;
                     $linksp = "index.php?act=sanphamct&idsp=".$id;
                     echo '<div class="selling_products" style="width:100%;">
                     <a href="'.$linksp.'"><img src="'.$hinh.'" alt="anh"></a>
                     <a href="'.$linksp.'">'.$name.'</a>
                   </div>';
                  }
                  ?>
                </div>
             </div>