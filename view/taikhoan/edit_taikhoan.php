<main class="catalog  mb ">
          
            <div class="boxleft">
                <div class="mb">
                    <div class="box_title">Cập Nhật Tài Khoản</div>
                        <div class="box_content form_account">
                            <?php 
                                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                }
                            ?>
                        <form action="index.php?act=edit_taikhoan" method="post">
                            <div>
                                <p>Tên Đăng Nhập</p>
                                <input type="text" name="user" placeholder="user" value="<?=$user?>">
                            </div>
                            <div>
                                Email
                                <input type="email" name="email"  placeholder="email" value="<?=$email?>">
                            </div>
                            Mật khẩu
                            <div>
                                <input type="password" name="pass"  placeholder="pass" value="<?=$pass?>">
                            </div>
                            Address
                            <div>
                                <input type="text" name="address"  placeholder="Address" value="<?=$address?>">
                            </div>
                            Telephone
                            <div>
                                <input type="text" name="tel"  placeholder="Phone Number" value="<?=$tel?>">
                            </div>
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" value="Cập Nhật" name="capnhat">
                            <input type="reset" value="Nhập lại">
                        </form>
                        <h3 class="thongbao">
                        <?php
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                        </h3>
                    </div>
                </div>
                
            </div>
      <!-- box right -->
            <div class="boxright"> 
                <?php include "view/boxright.php"; ?>
            </div>
           
</main>